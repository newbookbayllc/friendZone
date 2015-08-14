@extends('app')

@section('content')
<form method="post" name="" id="" action="{{ URL::asset('index.php/signup1') }}" />
                <div class="row">
                    <div class="col-md-12">
                        <div class="section">
                            <div class="container"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header text-center">
                            <h1>Tell us what you like to read
                                <small>(5 max)</small>
                            </h1>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group btn-group-justified btn-group-xs" data-toggle="buttons">
                            <a href="#" class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Biographies"/> &nbsp; Biographies&nbsp;<br>&amp;<br>Memoirs</a>
                            <a href="#" class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Business"/>Business<br>&amp;<br>Investing</a>
                            <a href="#" class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Computer"/>Computer<br>&amp;<br>Internet</a>
                            <a class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Health"/>Health, Mind<br>&amp;<br>Body</a>
                            <a class="btn btn-info"> <input type="checkbox" name=read_type[]"" id="" value="LGBT"/> LGBT</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group btn-group-justified btn-group-xs" data-toggle="buttons">
                            <a href="#" class="btn btn-info"><br> <input type="checkbox" name="read_type[]" id="" value="Drama"/> Drama<br><br></a>
                            <a href="#" class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Intertainment"/>Intertainment</a>
                            <a href="#" class="btn btn-info"> <input type="checkbox" name="" id="" value="Friendship"/>Friendship</a>
                            <a class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Horror"/> Horror</a>
                            <a class="btn btn-info"> <input type="checkbox" name="" id="" value="Mystery"/>Mystery<br>&amp;<br>Thriller</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group btn-group-justified btn-group-xs" data-toggle="buttons">
                            <a href="#" class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Family"/> Family</a>
                            <a href="#" class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Fantasy"/> Fantasy<br>&amp;<br>Science Fiction</a>
                            <a href="#" class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Fiction"/> Fiction</a>
                            <a class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Human"/> Human</a>
                            <a class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Nonfiction"/> Nonfiction</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group btn-group-justified btn-group-xs" data-toggle="buttons">
                            <a href="#" class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Paranormal"/> Paranormal</a>
                            <a href="#" class="btn btn-info" contenteditable="true"> <input type="checkbox" name="read_type[]" id=""  value="Poetry"/>Poetry&nbsp;<br>&amp;&nbsp;<br>Lyrics</a>
                            <a href="#" class="btn btn-info"> <input type="checkbox" name="read_type[]" id=""  value="Romance"/>Romance</a>
                            <a class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Spirituality"/> Spirituality</a>
                            <a class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="Suspense"/> Suspense</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group btn-group-justified btn-group-xs" data-toggle="buttons">
                            <a href="#" class="btn btn-info"><br> <input type="checkbox" name="read_type[]" id="" value="Shortstory"/> Short story<br><br></a>
                            <a href="#" class="btn btn-info"> <input type="checkbox" name="read_type[]" id="" value="YoundAdult"/>Yound-Adult</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
						<input type="submit" name="read_submit" value="Create Your Profile" class="btn btn-lg btn-primary col-sm-offset-5" />
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
 </form>      
    @stop
   
