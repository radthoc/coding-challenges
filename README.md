## Coding Challenges
 
### Array Sum
Calculate the sum of an array of numbers

### Christmas Tree
Given a tree height, generate a christmas tree with that height

### Grading Students
Round the students grades based on these rules:
- If the difference between the grade and the next multiple of 5 is less than 3, round the grade up to the next multiple of 5.
- If the grade is less than 38, no rounding occurs as the result will still be a failing grade.

### Phone Bill Calculator
Given the phone calls string below with the calls duration per number, calculate the bill ammount in cents based on the following rules:
- The number with less minutes is not charged
 - Any fraction of minute will be consider as a whole minute
 - If a number has less than 5 minutes the amount is 3 cents per minute
 - If it is more or equal to 5 minutes then is 150 cents per minute

```
00:01:07,400-234-090
00:05:01,701-080-080
00:05:00,400-234-090
```

### Hierarchical Tree Generator
Given the structure below, generate the tree for a company:
```
['id' => 1, 'company' => 'AddAp-tr DE', 'parent_id' => 0],
['id' => 5, 'company' => 'LITE - GmbH', 'parent_id' => 1],
['id' => 6, 'company' => 'wheem-ware', 'parent_id' => 1],
['id' => 2, 'company' => 'the b- GmbH', 'parent_id' => 0],
['id' => 3, 'company' => 'TVSMI- GmbH', 'parent_id' => 0],
['id' => 7, 'company' => 'TVSMI- GmbH', 'parent_id' => 3],
['id' => 8, 'company' => 'Promo-erver', 'parent_id' => 3],
['id' => 9, 'company' => 'Gecko-rado', 'parent_id' => 3],
['id' => 4, 'company' => 'Salem-rado', 'parent_id' => 3],
['id' => 10, 'company' => 'appge-rado', 'parent_id' => 2],
['id' => 11, 'company' => 'eniro-rado', 'parent_id' => 2],
['id' => 12, 'company' => 'Ineed-rado', 'parent_id' => 3],
```