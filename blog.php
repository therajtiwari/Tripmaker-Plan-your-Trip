<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="./style2.css" />
    <link rel="stylesheet" href="./css/blogs.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
</head>

<body>

    <script type="text/babel">
        console.log("insideeeee")
        const BlogCard = (props) => {
            return (
                <div>
                    <div class="card mb-5 col-md-12" style={{
                        margin: "auto", borderRadius: "0rem", padding: "0rem"
                    }}>

                        <img src={props.imgSrc}
                            class="card-img-top"
                            style={{
                                height: "300px !important", overflow: "hidden", objectFit: "cover"
                            }} />
                        <div class="card-body" style={{ margin: "20px 10px" }}>
                            <h2 class="card-title my-3">{props.title}</h2>
                            <div class="row my-3">
                                <div class="col-md-3">
                                    <span><i class="fa fa-calendar" style={{ color: "#b0914f" }}
                                        aria-hidden="true"></i></span>
                                    <h6 style={{ display: "inline", marginLeft: "10px" }}>20, MAR 2017</h6>
                                </div>
                                <div class="col-md-3">
                                    <span><i class="fa fa-user" aria-hidden="true"
                                        style={{ color: "#b0914f" }}></i></span>
                                    <h6 style={{ display: "inline", marginLeft: "10px" }}>Posted By {props.postedBy}</h6>
                                </div>
                                <div class="col-md-5">
                                    <span><i class="fa fa-tags" aria-hidden="true"
                                        style={{ color: "#b0914f" }}></i></span>
                                    <h6 style={{ display: "inline", marginLeft: "10px" }}>Lifestyle, Travel, Fashion</h6>
                                </div>
                            </div>
                            <p class="card-text-b">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Est
                            quas
                            perspiciatis, qui eius quam ullam, minima modi sapiente saepe neque
                            consequatur
                            hic
                            voluptatibus ad, animi nemo cum tempora molestiae corrupti amet voluptates
                            quaerat
                            maiores necessitatibus. Vero eaque mollitia, sapiente provident molestiae
                            doloremque
                            quaerat quae est. Earum at minima perferendis nobis?</p>
                            <p class="card-text-b"><small class="text-muted">Last updated 3 days ago</small>
                            </p>
                            <a href="#" class="btn btn-main btn-block btn-warning btn-continue" >Continue
                            Reading</a>
                        </div>
                    </div>
                </div >)


        }
        class App extends React.Component {
            render() {
                return <div>
                    <BlogCard title="An Amazing Night In Egypt" postedBy="Admin" imgSrc="http://valueadzvisas.com/blogpic/large/1532953912EGYPT.jpg" />
                    <BlogCard title="See the Northern Lights to Believe Them" postedBy="Raj " imgSrc="https://i.natgeofe.com/k/679e983c-4461-4398-bb6d-9b508fe3e4de/norway-northern-lights.jpg" />
                    <BlogCard title="Bali- An Experience of a Lifetime" postedBy="Moderator" imgSrc="https://media-cdn.tripadvisor.com/media/photo-s/03/49/d1/b6/yande-ardana-photography.jpg" />

                </div>
            }
        }



        ReactDOM.render(<App />, document.getElementById('mydiv'))

    </script>

    <header>
        <div class="navbar-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid ms-auto">
                    <a class="navbar-brand" href="index.php">TripMaker</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./includes">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./gallery.php">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./blog.php">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./all_tours.php">All Tours</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./login.html">Login</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <div class="cover-image-container">

            <div class="page-title-text">
                <h1>BLOG POSTS</h1>
            </div>
        </div>
    </header>
    <section class="blogs-container" style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 order-sm-2 order-md-1 order-2"
                    style="min-height: 500px;background-color:white">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="latest-posts-box">
                                    <div class="cat-title">
                                        <h4 class="m-4">Latest posts</h4>
                                    </div>
                                    <div class="cat-posts" style="margin-top: 20px;">
                                        <div class="card mb-3 border-0" style="max-width: 540px; margin:10px 20px">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="https://vidalingua.com/blog/mont-saint-michel"
                                                        style="width: 100%;" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title" style="font-weight: 500;">A day in
                                                            France1
                                                        </h5>
                                                        <p class="card-text-b"><small class="text-muted">Last updated
                                                                3
                                                                mins ago</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3 border-0" style="max-width: 540px; margin:10px 20px">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="https://i.huffpost.com/gen/1328484/thumbs/o-PARIA-CANYON-900.jpg?1"
                                                        style="width: 100%;" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title" style="font-weight: 500;">A day in
                                                            France2
                                                        </h5>
                                                        <p class="card-text-b-b"><small class="text-muted">Last updated
                                                                3
                                                                mins ago</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3 border-0" style="max-width: 540px; margin:10px 20px">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="https://media.farandwide.com/a7/07/a707b545fa73427bac3c7f468202039d.jpg"
                                                        style="width: 100%;" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title" style="font-weight: 500;">A day in
                                                            France3
                                                        </h5>
                                                        <p class="card-text-b-b"><small class="text-muted">Last updated
                                                                3
                                                                mins ago</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3 border-0" style="max-width: 540px; margin:10px 20px">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="http://wp.nathabblog.com/wp-content/uploads/2020/12/grand-canyon-7-fin_Web.jpg"
                                                        style="width: 100%;" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title" style="font-weight: 500;">A day in
                                                            France4
                                                        </h5>
                                                        <p class="card-text-b"><small class="text-muted">Last updated
                                                                3
                                                                mins ago</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="categories-box">
                                    <div class="cat-title">
                                        <h4 class="m-4">Categories</h4>
                                    </div>

                                    <div class="cat-posts">
                                        <ul class="list-unstyled m-4">
                                            <li>
                                                <a href=" #"> <i class="fa fa-angle-right"></i>Animals</a>
                                            </li>
                                            <li>
                                                <a href=" #"> <i class="fa fa-angle-right"></i>Portrait</a>
                                            </li>
                                            <li>
                                                <a href=" #"> <i class="fa fa-angle-right"></i>Wild Life</a>
                                            </li>
                                            <li>
                                                <a href=" #"> <i class="fa fa-angle-right"></i>Video</a>
                                            </li>
                                            <li>
                                                <a href=" #"> <i class="fa fa-angle-right"></i>Landscape</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="categories-box">
                                    <div class="cat-title">
                                        <h4 class="m-4">Tags</h4>
                                    </div>

                                    <div class="tag-posts">
                                        <ul class="list-unstyled widget-tag-list">
                                            <li><a href="#">Animals</a>
                                            </li>
                                            <li><a href="#">Landscape</a>
                                            </li>
                                            <li><a href="#">Portrait</a>
                                            </li>
                                            <li><a href="#">Wild Life</a>
                                            </li>
                                            <li><a href="#">Video</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 mt-sm-4 order-sm-1 order-md-2 order-1" style="min-height: 500px">
                    <div class="container-fluid">
                        <div class="row">
                            <div id="mydiv"></div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>


    </div>





    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <!-- bootstrap -->
</body>

</html>