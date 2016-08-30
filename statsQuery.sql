-- total number of active sellers

SELECT COUNT(farmID)
FROM users
WHERE farmID IS NOT NULL AND status = 'active';

-- no of new sellers per month
-- no need for programming loop

SELECT m as Month, Count(users.userID) as RegUserCount
FROM (
  SELECT m, y
  FROM
	(SELECT YEAR(curdate()) y ) years,
    (SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
      UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
      UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12
      ) months ) ym
  LEFT JOIN users
  ON ym.m = MONTH(users.sellStart)
  AND ym.y = YEAR(users.sellStart)
WHERE
  (y=YEAR(CURDATE()) AND m<=MONTH(CURDATE()))
  OR
  (y=YEAR(CURDATE()) AND m>MONTH(CURDATE()))
GROUP BY m;

-- no of coffee types advertised in the current month

SELECT COUNT(*) as Total,
    SUM(case WHEN type = 'Liberica' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as LibericaCount,
    SUM(case WHEN type = 'Robusta' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as RobustaCount,
    SUM(case WHEN type = 'Arabica' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as ArabicaCount
FROM products;

-- no of coffee variations advertised in the current month
    
SELECT COUNT(*) as Total,
    SUM(case WHEN variety = 'roasted' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as RoastedCount,
    SUM(case WHEN variety = 'dried' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as DriedCount,
    SUM(case WHEN variety = 'fresh' AND MONTH(updateDate) = MONTH(CURRENT_DATE()) then 1 else 0 end) as FreshCount
FROM products;
    
-- no of coffee types advertised per month
-- just program this and change 1 to any value from 1-12 to change months

SELECT 
	IFNULL(MONTH(updateDate), 1) as Month, 
	IFNULL(COUNT(*), 0) as Total,
    IFNULL(SUM(case WHEN type = 'Liberica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as LibericaCount,
    IFNULL(SUM(case WHEN type = 'Robusta' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as RobustaCount,
    IFNULL(SUM(case WHEN type = 'Arabica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as ArabicaCount
FROM products
WHERE MONTH(updateDate) = 1;

-- no of coffee varieties advertised per month
-- just program this and change 1 to any value from 1-12 to change months

SELECT 
	IFNULL(MONTH(updateDate), 1) as Month, 
	IFNULL(COUNT(*), 0) as Total,
    IFNULL(SUM(case WHEN variety = 'roasted' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as RoastedCount,
    IFNULL(SUM(case WHEN variety = 'dried' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as DriedCount,
    IFNULL(SUM(case WHEN variety = 'fresh' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as FreshCount
FROM products
WHERE MONTH(updateDate) = 1;

-- no of coffee product trends in the current year
-- just program this and change 1 to any value from 1-12 to change months

SELECT 
	IFNULL(MONTH(updateDate), 8) as Month, 
	IFNULL(COUNT(*), 0) as Total,
    IFNULL(SUM(case WHEN variety = 'roasted' AND type = 'Robusta' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as RRCount,
    IFNULL(SUM(case WHEN variety = 'dried' AND type = 'Robusta' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as DRCount,
    IFNULL(SUM(case WHEN variety = 'fresh' AND type = 'Robusta' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as FRCount,
    IFNULL(SUM(case WHEN variety = 'roasted' AND type = 'Arabica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as RACount,
    IFNULL(SUM(case WHEN variety = 'dried' AND type = 'Arabica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as DACount,
    IFNULL(SUM(case WHEN variety = 'fresh' AND type = 'Arabica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as FACount,
        IFNULL(SUM(case WHEN variety = 'roasted' AND type = 'Liberica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as RLCount,
    IFNULL(SUM(case WHEN variety = 'dried' AND type = 'Liberica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as DLCount,
    IFNULL(SUM(case WHEN variety = 'fresh' AND type = 'Liberica' AND YEAR(updateDate) = YEAR(CURRENT_DATE()) then 1 else 0 end), 0) as FLCount
FROM products
WHERE MONTH(updateDate) = 8;

-- no of registered users

SELECT COUNT(*)
FROM users;

-- no of active users

SELECT COUNT(*)
FROM users
WHERE status = 'active';

-- no of banned users

SELECT COUNT(*)
FROM users
WHERE status = 'suspended';

-- no of inactive users

SELECT COUNT(*)
FROM users
WHERE status = 'inactive';

-- no of registered users per month
-- no need for programming loop

SELECT m as Month, Count(users.userID) as RegUserCount
FROM (
  SELECT m, y
  FROM
	(SELECT YEAR(curdate()) y ) years,
    (SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
      UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
      UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12
      ) months ) ym
  LEFT JOIN users
  ON ym.m = MONTH(users.regDate)
  AND ym.y = YEAR(users.regDate)
WHERE
  (y=YEAR(CURDATE()) AND m<=MONTH(CURDATE()))
  OR
  (y=YEAR(CURDATE()) AND m>MONTH(CURDATE()))
GROUP BY m;