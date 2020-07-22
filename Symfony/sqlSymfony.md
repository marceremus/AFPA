# Une autre façon de créer des requêtes SQL sous Symfony:

## Une requête simple:
```
public function countNumberPrintedForCategory(Category $category)
    {
        $conn = $this->getEntityManager()
            ->getConnection();
        $sql = '
            SELECT SUM(fc.numberPrinted) as fortunesPrinted, AVG(fc.numberPrinted) as fortunesAverage, cat.name
            FROM fortune_cookie fc
            INNER JOIN category cat ON cat.id = fc.category_id
            WHERE fc.category_id = :category
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('category' => $category->getId()));
        return $stmt->fetch();
```
