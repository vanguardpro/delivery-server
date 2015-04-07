Console commands:
1. php yii post/sync [project_id = 1] [offset = 100] [stopAfter = 0]
    - project_id - internal ID for wordpress blog. For example 1 is http://womanfreebies.com/, 2 is http://womenfreebies.ca/ etc
    default value is 1
    - offset - how many posts get from one api request
    default value is 100
    - stopAfter - the number when stop trying to get new posts. For example 500 will sync 500 last posts and stop
    default value is 0 (means never stop)
2. php yii post/remove [project_id = false]
    - project_id - internal ID for wordpress blog. For example 1 is http://womanfreebies.com/, 2 is http://womenfreebies.ca/ etc
    default value is false (means drop all)
3. php yii taxonomy/sync [project_id = 1]
    - project_id - internal ID for wordpress blog. For example 1 is http://womanfreebies.com/, 2 is http://womenfreebies.ca/ etc
    default value is 1
4. php yii taxonomy/remove [project_id = false]
    - project_id - internal ID for wordpress blog. For example 1 is http://womanfreebies.com/, 2 is http://womenfreebies.ca/ etc
    default value is false (means drop all)


