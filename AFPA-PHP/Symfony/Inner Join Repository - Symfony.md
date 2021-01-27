# Inner Join Repository - Symfony

```


$query = $this->createQueryBuilder('c')
        ->select('c')
        ->leftJoin('MyBundleName:ChildOne', 'co', 'WITH', 'co.id = c.id')
        ->leftJoin('MyBundleName:ChildTwo', 'ct', 'WITH', 'ct.id = c.id')
        ->orderBy('c.createdAt', 'DESC')
        ->where('co.group = :group OR ct.group = :group')
        ->setParameter('group', $group)
        ->setMaxResults(20);


```

