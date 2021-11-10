# Peak Up your Flag & Go

### Problem Statement

Consider yourself as a tourist in Switzerland. You are enchanted by the beautiful mountain ranges over there and decide to climb some. You search on the internet and find a list of the best mountain ranges near you. You select upon N ranges of mountains which have 5 mountains each.
After reaching the spots you decide you want to flex on social media by marking the highest peak on each mountain range with your flag. These flags have the height of the mountain written on them which form a special code on concatenation. There is also a message in ground that says read it backward.
Find the code.

### Input:

The first line contains no of test cases ```T```
For each test case Number of ranges of Mountains ```N```
For each range input 5 heights(space seperated) corresponding to given mountains in that range

### Output:

The numeric code formed from the concatenation of max peak heights for each test case.

### Constraints:

1<=T<=100
1<=N<=10<sup>4</sup>
1<=Height of any Mountain<=10<sup>4</sup>

### Sample input:

2
4
5   10  15   10    7
16  20  69   30   15
18  20  22  420   10
12  13  14   15   10
2
99  17  67  879  277
356 192 12  218   28

### Sample output:

510249651
653978

### Explanation: 

For first test case 156942015 is the numeric code formed by the concatenation of max peak heights
The reverse of the code is 510249651
For second test case 879356 is the numeric code formed by the concatenation of max peak heights
The reverse of the code is 653978
