<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('UserTableSeeder');

        $this->command->info('User table seeded!');
    }

}

class UserTableSeeder extends Seeder {

    public function run()
    {
		//delete users,friends table records
        DB::table('users')->delete();
		DB::table('friends')->delete();
		//insert some dummy records
        DB::table('users')->insert( array(
			array( 'id' => '1', 'username'=>'nameA', 'email'=>'nameA@usc.edu', 'timezone'=>'utc','activated'=>'1','activation_code'=>'1', 'password' => 'nameA','remember_token'=>'a' ,'created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20' ),
			array( 'id' => '2', 'username'=>'nameB', 'email'=>'nameB@usc.edu', 'timezone'=>'utc','activated'=>'1','activation_code'=>'2', 'password' => 'nameB','remember_token'=>'b' ,'created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20' ),
			array( 'id' => '3', 'username'=>'nameC', 'email'=>'nameC@usc.edu', 'timezone'=>'utc','activated'=>'1','activation_code'=>'3', 'password' => 'nameC','remember_token'=>'c' ,'created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20' ),
			array( 'id' => '4', 'username'=>'nameD', 'email'=>'nameD@usc.edu', 'timezone'=>'utc','activated'=>'1','activation_code'=>'4', 'password' => 'nameD','remember_token'=>'d' ,'created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20' ),
			array( 'id' => '5', 'username'=>'nameE', 'email'=>'nameE@usc.edu', 'timezone'=>'utc','activated'=>'1','activation_code'=>'5', 'password' => 'nameE','remember_token'=>'e' ,'created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20' ),
			
		));
		DB::table('friends')->insert(array(
			array('friend_one'=>'1','friend_two'=>'2','friend_type'=>'defaultFriends','book_id'=>'0','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'2','friend_two'=>'1','friend_type'=>'defaultFriends','book_id'=>'0','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'1','friend_two'=>'3','friend_type'=>'defaultFriends','book_id'=>'0','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'3','friend_two'=>'1','friend_type'=>'defaultFriends','book_id'=>'0','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'1','friend_two'=>'4','friend_type'=>'defaultFriends','book_id'=>'0','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'4','friend_two'=>'1','friend_type'=>'defaultFriends','book_id'=>'0','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'2','friend_two'=>'5','friend_type'=>'book1','book_id'=>'1','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'5','friend_two'=>'2','friend_type'=>'book1','book_id'=>'1','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'2','friend_two'=>'4','friend_type'=>'book1','book_id'=>'1','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'4','friend_two'=>'2','friend_type'=>'book1','book_id'=>'1','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'1','friend_two'=>'3','friend_type'=>'book2','book_id'=>'2','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'3','friend_two'=>'1','friend_type'=>'book2','book_id'=>'2','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'1','friend_two'=>'2','friend_type'=>'book2','book_id'=>'2','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			array('friend_one'=>'2','friend_two'=>'1','friend_type'=>'book2','book_id'=>'2','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20'),
			));
		DB::table('books')->insert(array(
			array('id'=>'1','author_id'=>'1','num_read'=>'10','num_star'=>'2','num_comment'=>'20','title'=>'title','image'=>'image'),
			array('id'=>'2','author_id'=>'1','num_read'=>'10','num_star'=>'2','num_comment'=>'20','title'=>'title','image'=>'image'),
		));
		DB::table('comments')->insert(array(
			array('userId'=>'2','BookId'=>'1','Content'=>'this is a good book','created_at'=>'2010-10-11 00:00:00','updated_at'=>'0000-00-00 00:00:00'),
			array('userId'=>'3','BookId'=>'1','Content'=>'this is a good book','created_at'=>'2010-10-12 00:00:00','updated_at'=>'0000-00-00 00:00:00'),
			array('userId'=>'2','BookId'=>'2','Content'=>'this is a good book','created_at'=>'2010-10-13 00:00:00','updated_at'=>'0000-00-00 00:00:00'),
			array('userId'=>'3','BookId'=>'2','Content'=>'this is a good book','created_at'=>'2010-10-14 00:00:00','updated_at'=>'0000-00-00 00:00:00'),			
		));
    }
}
//Users::create(['Type' => '1', 'name'=>'author', 'email'=>'author@usc.edu', 'password' => 'author','remember_token'=>'','created_at'=>'2015-01-05 12:20:20', 'updated_at'=>'2015-01-06 12:30:20']);
?>