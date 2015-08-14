<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <script type="text/javascript" src="{{ URL::asset('public/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>
        <link href="{{ URL::asset('public/css/font-awesome.min.css') }}" 
        rel="stylesheet" type="text/css">
        <script type="text/javascript">
            function show_percentage(value)
                    			{
                    				var percentage=value/100;
                    				var text="You will get " + percentage + "% reward";
									document.getElementById('percentage_view_block').innerHTML=text;
                    				
                    			}
                                $(function () {
                                                                                      $('[data-toggle="popover"]').popover()
                                                                                    })
        </script>
        <link rel="stylesheet" href="{{ URL::asset('public/css/suffort.css') }}">
    </head>
    
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Back H.G.Ammy for</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="btn-group">
                                        <button type="button" onclick="show_percentage(100);" class="btn btn-default">$100</button>
                                        <button onclick="show_percentage(250);" type="button" class="btn btn-default">$250</button>
                                        <button onclick="show_percentage(500);" type="button" class="btn btn-default">$500</button>
                                        <button type="button" class="btn btn-default" onclick="show_percentage(1000);">$1000</button>
                                        <button type="button" class="btn btn-default" onclick="show_percentage(2500);">$2500</button>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <h5 class="pull-left" id="percentage_view_block"></h5>
                                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                                    <a class="btn btn-success">Suffort</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h4 class="text-primary">
                                <a href="#">Marketplace</a>&gt;
                                <a href="#">Suffort</a>
                            </h4>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="section">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?q=25&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d"
                                                        class="img-responsive">
                                                        <h4>
                                                            <a href="#">H.G.Ammy</a>
                                                            <a data-toggle="modal" data-target="#myModal"><span class="label label-default">Suffort Me</span></a>
                                                        </h4>
                                                        <h6>Worked on : An Apocalyptic Curse</h6>
                                                        <h6>Expected to finish: 7/30/2015</h6>
                                                        <h6>Amount Needed: $1000</h6>
                                                        <h6>Revenue Share : Yes</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                                                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                                                            <br>Ut enim ad minim veniam, quis nostrud</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <img src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?q=25&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d"
                                                        class="img-responsive">
                                                        <h4>
                                                            <a href="#">H.G.Ammy</a>
                                                            <a data-toggle="modal" data-target="#myModal"><span class="label label-default">Suffort Me</span></a>
                                                        </h4>
                                                        <h6>Worked on : An Apocalyptic Curse</h6>
                                                        <h6>Expected to finish: 7/30/2015</h6>
                                                        <h6>Amount Needed: $1000</h6>
                                                        <h6>Revenue Share : Yes</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                                                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                                                            <br>Ut enim ad minim veniam, quis nostrud</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <img src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?q=25&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d"
                                                        class="img-responsive">
                                                        <h4>
                                                            <a href="#">H.G.Ammy</a>
                                                            <a data-toggle="modal" data-target="#myModal"><span class="label label-default">Suffort Me</span></a>
                                                        </h4>
                                                        <h6>Worked on : An Apocalyptic Curse</h6>
                                                        <h6>Expected to finish: 7/30/2015</h6>
                                                        <h6>Amount Needed: $1000</h6>
                                                        <h6>Revenue Share : Yes</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                                                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                                                            <br>Ut enim ad minim veniam, quis nostrud</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="section">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?q=25&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d"
                                                        class="img-responsive">
                                                        <h4>
                                                            <a href="#">H.G.Ammy</a>
                                                            <a data-toggle="modal" data-target="#myModal"><span class="label label-default">Suffort Me</span></a>
                                                        </h4>
                                                        <h6>Worked on : An Apocalyptic Curse</h6>
                                                        <h6>Expected to finish: 7/30/2015</h6>
                                                        <h6>Amount Needed: $1000</h6>
                                                        <h6>Revenue Share : Yes</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                                                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                                                            <br>Ut enim ad minim veniam, quis nostrud</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <img src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?q=25&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d"
                                                        class="img-responsive">
                                                        <h4>
                                                            <a href="#">H.G.Ammy</a>
                                                            <a data-toggle="modal" data-target="#myModal"><span class="label label-default">Suffort Me</span></a>
                                                        </h4>
                                                        <h6>Worked on : An Apocalyptic Curse</h6>
                                                        <h6>Expected to finish: 7/30/2015</h6>
                                                        <h6>Amount Needed: $1000</h6>
                                                        <h6>Revenue Share : Yes</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                                                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                                                            <br>Ut enim ad minim veniam, quis nostrud</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <img src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?q=25&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d"
                                                        class="img-responsive">
                                                        <h4>
                                                            <a href="#">H.G.Ammy</a>
                                                            <a data-toggle="modal" data-target="#myModal"><span class="label label-default">Suffort Me</span></a>
                                                        </h4>
                                                        <h6>Worked on : An Apocalyptic Curse</h6>
                                                        <h6>Expected to finish: 7/30/2015</h6>
                                                        <h6>Amount Needed: $1000</h6>
                                                        <h6>Revenue Share : Yes</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                                                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                                                            <br>Ut enim ad minim veniam, quis nostrud</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <br>
                                        <h4>Introduction to Suffort</h4>
                                        <blockquote>
                                            <p>What is Suffort?</p>
                                            <footer>Suffort is for xxxx</footer>
                                        </blockquote>
                                        <blockquote>
                                            <p>How much could I siffort author?</p>
                                            <footer>Depends. We offer various options.</footer>
                                        </blockquote>
                                        <blockquote>
                                            <p>What will I get from Suffort?</p>
                                            <footer>Depends, revenue share ($100-1%),special thanks to author</footer>
                                        </blockquote>
                                        <blockquote>
                                            <p>What is Suffort?</p>
                                            <footer>Suffort is for xxxx</footer>
                                        </blockquote>
                                        <blockquote>
                                            <p>What is Suffort?</p>
                                            <footer>Suffort is for xxxx</footer>
                                        </blockquote>
                                        <blockquote>
                                            <p>What is Suffort?</p>
                                            <footer>Suffort is for xxxx</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
