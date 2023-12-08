# GeeksForGeeks problem of the day - solving problems

Sample problem solving using php

## Problem of the day
1. Pascal Triangle
2. Symmetric Tree
3. BTS Insertion
4. BTS Predessor Search
5. BTS Successor Search
6. Find The String
7. Height Binary
8. Level Order Traversal
9. Smallest Substring Of All Characters
10. Graphs
11. Detect Cycle Using DSU
12. Minimize the Heights of Towers
    Given an array arr[] denoting heights of N towers and a positive integer K.

For each tower, you must perform exactly one of the following operations exactly once.

    Increase the height of the tower by K
    Decrease the height of the tower by K

Find out the minimum possible difference between the height of the shortest and tallest towers after you have modified each tower.

You can find a slight modification of the problem here.
Note: It is compulsory to increase or decrease the height by K for each tower. After the operation, the resultant array should not contain any negative integers.

Example 1:
```
Input:
K = 2, N = 4
Arr[] = {1, 5, 8, 10}
Output:
5
Explanation:
The array can be modified as
{1+k, 5-k, 8-k, 10-k} = {3, 3, 6, 8}.
The difference between
the largest and the smallest is 8-3 = 5.
```

Example 2:
```
Input:
K = 3, N = 5
Arr[] = {3, 9, 12, 16, 20}
Output:
11
Explanation:
The array can be modified as
{3+k, 9+k, 12-k, 16-k, 20-k} -> {6, 12, 9, 13, 17}.
The difference between
the largest and the smallest is 17-6 = 11. 
```
13. Transform to prime
    Given an array of n integers. Find the minimum non-negative number to be inserted in array, so that sum of all elements of array becomes prime.

Example 1:
```
Input:
N=5
arr = {2, 4, 6, 8, 12}
Output:  
5
Explanation:
The sum of the array is 32 ,we can add 5 to this to make it 37 which is a prime number.
```

Example 2:

```
Input:
N=3
arr = {1, 5, 7}
Output:  
0
Explanation:
The sum of the array is 13 which is already prime. 
```