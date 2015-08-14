in friend table define rules:
friend_type is booKTitle
friends.friend_type = books.title

table 'friends' define rules:
friend_one friend_two : userId friendId ( userId is the user, friendId is the friend )
friend_one friend_two : friendId userId ( friendId is friend, userId is the user )
eg: 
friend_one friend_two      bookId    nick_name
     1          2             1      friend_two's nickname( userid=2 ) 
     2          1             1      friend_two's nickname( userid=1 )

each time when adding someone as a friend, you have to insert both into the database

 