## Classes abstraites

Définition des classes abstraites
Les classes abstraites s'inscrivent davantage dans la sûreté de la programmation orientée objet. La première particularité d'une classe abstraite, c'est qu'elle ne peut être instanciée (et donc créer un objet). De cette affirmation, on en déduit logiquement qu'une classe abstraite est déclarée afin d'être dérivée par des classes concrètes.

Une classe abstraite se comporte comme une classe concrète typique. C'est-à-dire qu'elle peut déclarer des attributs et des méthodes traditionnels qui seront accessibles dans les classes dérivées. En fonction bien sûr de la visibilité choisie (public, private et protected) pour chacun des attributs et méthodes.

Jusque là, il n'y a aucun changement par rapport aux classes concrètes si ce n'est le fait que l'on ne puisse pas instancier les classes abstraites. C'est là qu'interviennent les méthodes abstraites. 

Ces dernières devront obligatoirement être redéfinies dans les classes dérivées. C'est un moyen de s'assurer que la classe dérivée adoptera le comportement désiré.

#### Déclaration d'une classe abstraite
 
abstract class EtreHumain


### Déclaration et redéfinition des méthodes abstraites

Une méthode abstraite est aussi déclarée au moyen du mot-clé « abstract ». C'est une méthode partiellement définie dans la classe. En effet, lorsque l'on déclare une méthode abstraite, on ne définit que son prototype (sa signature). Les classes dérivées devront obligatoirement redéfinir entièrement (prototype + corps) toutes les méthodes abstraites de la classe parente.


abstract class Car {
  // Abstract classes can have properties
  protected $tankVolume;
 
  // Abstract classes can have non abstract methods
  public function setTankVolume($volume)
  {
    $this -> tankVolume = $volume;
  }
 
  // Abstract method
  abstract public function calcNumMilesOnFullTank();
}


------------------------------------------------------------------------------------

abstract class AbstractWorker implements Worker {
    protected $pdo;
    protected $logger;

    public function __construct(PDO $pdo, Logger $logger) {
        $this->pdo = $pdo;
        $this->logger = $logger;
    }

    public function run() {
        try {
            $this->setMemoryLimit($this->getMemoryLimit());
            $this->logger->log("Preparing main");
            $this->prepareMain();
            $this->logger->log("Executing main");
            $this->main();
        } catch (Throwable $e) {
            // Catch and rethrow all errors so they can be logged by the worker
            $this->logger->log("Worker failed with exception: {$e->getMessage()}");
            throw $e;
        }
    }

    private function setMemoryLimit($memoryLimit) {
        ini_set('memory_limit', $memoryLimit);
        $this->logger->log("Set memory limit to $memoryLimit");
    }

    abstract protected function getMemoryLimit();

    abstract protected function prepareMain();

    abstract protected function main();
}

------------------------------------------------------------------------------------

class TransactionProcessorWorker extends AbstractWorker {
    private $transactions;

    protected function getMemoryLimit() {
        return "512M";
    }

    protected function prepareMain() {
        $stmt = $this->pdo->query("SELECT * FROM transactions WHERE processed = 0 LIMIT 500");
        $stmt->execute();
        $this->transactions = $stmt->fetchAll();
    }

    protected function main() {
        foreach ($this->transactions as $transaction) {
            // Could throw some PDO or MYSQL exception, but that is handled by the AbstractWorker
            $stmt = $this->pdo->query("UPDATE transactions SET processed = 1 WHERE id = {$transaction['id']} LIMIT 1");
            $stmt->execute();
        }
    }
}

