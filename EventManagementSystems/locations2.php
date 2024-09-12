<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event management system</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/urbanxchange.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Pacific Mall's Dining Room</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/urbanxchange.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE ULTIMATE PRIVATE DINING EXPERIENCE</h5><!--content title-->
                                                <p>
                                                Sitting amongst historic sandstone, the Urban Xchange Private Dining
                                                Room is the epitome of elegance for a sophisticated celebration.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                With an extensive
                                                wine list available, AV capabilities for speeches and formalities and
                                                an adjoining lounge for pre or post event entertaining, the Private
                                                Dining Room is a unique, romantic and stylish choice.
                                                </p>

                                                <p>
                                                Accommodating 65 guests for dinners or conferences and up to 120 for 
                                                cocktail parties, this private, heritage space brings character and
                                                charm to any event, with the attached lounge and bar ideal for pre- or
                                                post-event drinks or for use as a breakout room.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Pacific Mall's Dining Room</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Opposite Scholars Home School, Dehradun
                            </p>
                            <p class="definition"><!--content body-->
                            Malls in Dehradun are a relatively new concept establish to keep up with the ever-increasing tourists because of its sceneries, commute options and educational institutions. Dehradun has faced constant demand to grow, to become more urbanized and to cater to the growing population.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/ananasbar.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">The Gaia Gourmet</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/ananasbar.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>A CORNER OF DEHRADUN IN THE ROCKS</h5><!--content title-->
                                                <p>
                                                Champagne imbibing, glamorous, smiling and flirting, Ananas Bar & Brasserie
                                                is the Sydney Sophisticate’s adult playground.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Awarded a Chef’s Hat in the 2014 Sydney Morning Herald Good Food Guide Awards,
                                                we serve up a contemporary twist on the best classic French food for lunch,
                                                dinner and late-night suppers. With a produce-centric menu that takes global
                                                cues and delivers them at affordable prices, you’re in for a feast for your senses.
                                                </p>

                                                <p>
                                                Our dedicated Seafood Bar is a venue highlight, treating you to shucked-to-order oysters
                                                and a daily plateau fruits de mer. Our full brasserie menu is also complemented by
                                                a selection of bar treats, available until 3am. So if you’re a theatre goer or night-dweller 
                                                looking for a late night dining experience, Ananas Bar & Brasserie has you covered.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">The Gaia Gourmet</h1><!--location title-->
                            <p class="location">Canal Road Chironwala Jakhan Dehradun</p><!--location secondary content-->
                            <p class="definition">
                            Takeout, Reservations, Outdoor Seating, Seating, Parking Available, Street Parking, Serves Alcohol, Full Bar, Wine and Beer, Accepts American Express, Accepts Mastercard, Accepts Visa, Free Wifi, Accepts Credit Cards, Table Service, Live Music, Jazz Bar, Dog Friendly, Family style, Sports bars.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line--> 
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/argyle.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Beyul</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/argyle.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>FIVE BARS OVER TWO LEVELS, AT ONE VENUE IN THE ROCKS</h5><!--content title-->
                                                <p>
                                                There’s no question that The Rocks is home to some of Sydney’s most intriguing historical stories. And
                                                our landmark venue, The Argyle, has a unique, rich history all of its own.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                If your event is shaping up to be high in numbers, then Gallery’s high-end classic style has room to spare.
                                                Combined with the Reibey Room and Belvedere Bar, there’s space for up to 500 guests – perfect for thriving
                                                cocktail parties, networking or post-conference events.
                                                </p>

                                                <p>
                                                The venue can also be hired for social or corporate functions for groups up to 1800. Event organisers
                                                have the choice between the sandstone courtyard, the Main Bar, Gallery, Reibey Room, Belvedere Bar
                                                or the entire venue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Beyul</h1>
                            <p class="location">Hyatt Regency Dehradun</p>
                            <p class="definition">Welcome to Beyul, where the mystique of the mountains meets the allure of modern luxury. Open from lunch until late into the evening, Beyul is the ultimate destination for those seeking an unforgettable experience.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#argyle">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/munich.jpg" class = "img-responsive">
                        </div>
                        <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Crossroads Mall</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/munich.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE BEST OF Crossroads AT Dehradun’S SOUTH WHARF</h5>
                                                <p>
                                                Experience Oktoberfest 365 days of the year with uber biers, parties and food at this 1000-strong Munich-styled restaurant,
                                                located in the heart of Melbourne’s bustling South Wharf.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                The uber venue is our latest venture, bringing to life a traditional
                                                Bavarian bier haus, where you can dink drink and party like Oktoberfest never ended. The state-of-the-art venue seats
                                                over 900 people and is located opposite the Melbourne Convention & Exhibition Centre, overlooking Melbourne’s South Wharf
                                                Promenade.
                                                </p>
                                                
                                                <p>
                                                We’re equipped with three bars, a main dining room, mezzanine floors plus a private dining area, making it the
                                                prefect destination for events. Our high truss ceilings, mezzanine levels, inbuilt stage and audio-visual capabilities make
                                                it a go-to destination for events of all shapes and sizes, so you can party like it’s nein-tein-nein-te-nein.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Crossroads Mall</h1>
                            <p class="location">Rajpur road, Dehradun</p>
                            <p class="definition">Find your favourite brands and the hottest new trends in fashion, beauty, lifestyle, food and entertainment only at Crossroads Mall Dehradun.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
