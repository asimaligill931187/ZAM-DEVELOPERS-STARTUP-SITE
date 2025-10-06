<?php
$ROUTE = '../../';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Graphics</title>
    <style>
        .graphices-head-img {
            width: 80%;
            height: 70vh;
        }

        @media (max-width: 767px) {

            .graphices-head-img {
                width: 80%;
                height: 20vh;
            }
        }


        .bo-color {
            background-color: #1a68bc;
            color: white;
        }

        .graphices-head-color {
            color: #1a68bc;
        }

        .photoshop-Symbol-size {
            width: 25vw;
            height: 50vh;
        }

        @media (max-width: 767px) {

            .photoshop-Symbol-size {
                width: 50vw;
                height: 30vh;
            }
        }

        .textAlignent {
            text-align: justify;
        }

        .graphices-card {
            border-radius: 0px 10px 10px 0px;
            font-weight: normal;
            border-left: 6px solid #1a68bc;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), -10px 0 10px -10px rgba(0, 0, 0, 0.1);

        }

        .graphices-card1 {
            border-radius: 10px 0px 0px 10px;
            font-weight: normal;
            box-shadow: 0px 4px 10px -4px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 767px) {

            .graphices-card {
                border-radius: 0px 0px 10px 10px;
                font-weight: normal;
                border-top: 6px solid #1a68bc;
                border-left: 0px;
            }
        }

        @media (max-width: 767px) {

            .graphices-card1 {
                border-radius: 10px 10px 0px 0px;
                font-weight: normal;
                box-shadow: 0px -4px 5px -2px rgba(0, 0, 0, 0.1),
                    -4px 0px 5px -2px rgba(0, 0, 0, 0.1),
                    4px 0px 5px -2px rgba(0, 0, 0, 0.1);
            }
        }

        .text-bold {
            font-style: oblique;
            font-weight: bold;
            font-size: large;
        }

        .text-bold1 {
            font-style: oblique;
            font-weight: bold;
            font-size: medium;
        }
    </style>

</head>
<?php include("../../includes/header/header.php") ?>

<body>
    <div class="container-fluid p-3 text-center">
        <h1 class="graphices-head-color p-3">Graphics</h1>
        <img src="./img/logos-1.png" class="graphices-head-img" alt="logos-1">
    </div>
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-sm-12 p-5">
                <h3 class="graphices-head-color my-4">Photoshop</h3>
                <p class="textAlignent">
                    ZAM Developers offers specialized services for Adobe Photoshop, leveraging its extensive capabilities to deliver custom solutions that meet unique client needs. We create bespoke plugins and scripts to automate repetitive tasks, streamline workflows, and enhance productivity for designers and artists. Our team integrates Photoshop with other applications, enabling seamless transitions and data exchanges that boost efficiency. By developing tailored tools and functionalities, we help clients unlock the full potential of Photoshop, allowing for greater creativity and precision in their projects. ZAM Developers' expertise ensures that users can maximize the benefits of Photoshop, driving innovation and excellence in digital design.
            </div>
            <div class=" col-lg-5 col-sm-12 text-center align-items-center  align-content-center"> <img src="./img/photoshop.png" class="photoshop-Symbol-size" alt="photoshop-Symbol"></div>
        </div>
    </div>
    <h2 class="graphices-head-color px-5 mt-5">Services</h2>
    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-sm-12 p-5 align-content-center graphices-card1  ">
                <p class="text-center text-bold">Photo Editing and Retouching</p>
                <p class="text-bold">Image Manipulation and Compositing</p>
                <p class="text-end text-bold1">Graphic Design</p>
                <p class="text-bold">Social Media Content Creation</p>
                <p class="text-center text-bold1">Custom Artwork and Illustrations</p>
                <p class="text-end text-bold">Creating Visual Content for Branding</p>
            </div>
            <div class=" col-lg-5 col-sm-12  p-5 graphices-card  ">
                <p class="text-center  ">Creating logos, business cards, and flyers</p>
                <p class="">Designing posters, banners, and social media graphics</p>
                <p class="text-end ">Designing Instagram posts and stories</p>
                <p class=" ">Creating Facebook ads and cover photos</p>
                <p class="text-center ">Crafting YouTube thumbnails and channel art</p>
                <p class="text-end  ">Color correction</p>
                <p class=" ">Creating illustrations for books, blogs</p>
                <p class="text-end ">Designing brand identity elements</p>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row justify-content-center bo-color">
            <div class="col-lg-5 col-sm-12 p-5">
                <h3 class="my-4">Canva</h3>
                <p class="textAlignent">
                    ZAM Developers provides tailored services for Canva, enhancing its user-friendly design platform to meet specific client needs. We create custom templates, graphics, and branding elements that help businesses maintain a consistent and professional visual identity. Our team also develops integrations with other tools and platforms, ensuring seamless workflows and efficient content creation processes. By leveraging Canva's intuitive features and expanding its capabilities through bespoke solutions, ZAM Developers enables clients to maximize their creative potential and streamline their design efforts. This ensures that users can produce high-quality visuals with ease, driving engagement and success in their digital marketing and communication strategies.
                </p>
            </div>
            <div class=" col-lg-5 col-sm-12 text-center align-items-center  align-content-center"> <img src="./img/canva.png" class="photoshop-Symbol-size" alt="canva-Symbol"></div>
        </div>
    </div>
    <h2 class="graphices-head-color px-5 mt-5">Services</h2>
    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-sm-12 p-5 align-content-center graphices-card1  ">
                <p class="text-center text-bold">Graphic Design</p>
                <p class="text-bold"> Marketing Materials</p>
                <p class="text-end text-bold1">Social Media Management</p>
                <p class="text-bold">Event Invitations and Materials</p>
                <p class="text-center text-bold1">Website and Blog Graphics</p>
                <p class="text-end text-bold">Visual Content for Advertisements</p>
            </div>
            <div class=" col-lg-5 col-sm-12  p-5 graphices-card  ">
                <p class="text-center  ">Designing promotional banners and ads</p>
                <p class="">Crafting custom logos and brand elements</p>
                <p class="text-end ">Designing pitch decks for startups and businesses</p>
                <p class=" ">Creating professional presentations</p>
                <p class="text-center ">Creating email marketing templates and business cards</p>
                <p class=" ">Designing invitations for weddings, birthdays, and other events</p>
                <p class="text-end  ">Creating website banners and sliders</p>
                <p class="text-center">Designing blog post graphics and headers</p>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-sm-12 p-5">
                <h3 class="graphices-head-color my-4">Illustrator</h3>
                <p class="textAlignent">
                    ZAM Developers specializes in providing advanced services for Adobe Illustrator, empowering designers to create intricate vector graphics and illustrations with precision and efficiency. We develop custom scripts, plugins, and extensions that automate repetitive tasks, enhance workflow efficiency, and integrate seamlessly with other Adobe Creative Cloud applications. Our team also offers bespoke solutions for vector artwork, icon design, and typography, enabling clients to achieve unique visual identities and brand consistency. By leveraging Adobe Illustrator's robust features and our technical expertise, ZAM Developers assists clients in maximizing creativity and productivity, ensuring they can deliver exceptional graphic design solutions tailored to their specific needs and objectives.
                </p>
            </div>
            <div class=" col-lg-5 col-sm-12 text-center align-items-center  align-content-center"> <img src="./img/illustrator.png" class="photoshop-Symbol-size" alt="illustrator-Symbol"></div>
        </div>
    </div>
    <h2 class="graphices-head-color px-5 mt-5">Services</h2>
    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-sm-12 p-5 align-content-center graphices-card1  ">
                <p class="text-center text-bold">Logo Design</p>
                <p class="text-bold">Vector Illustrations</p>
                <p class="text-end text-bold1">Web and App Design</p>
                <p class="text-bold">Art and Illustration for Merchandise</p>
                <p class="text-center text-bold1">Mockups and Prototypes</p>
                <p class="text-end text-bold">Typography and Lettering</p>
            </div>
            <div class=" col-lg-5 col-sm-12  p-5 graphices-card  ">
                <p class="text-center ">Designing logo variations and brand marks</p>
                <p class="">Creating custom icons and symbols</p>
                <p class="text-end ">Crafting unique character designs and mascots</p>
                <p class="text-center ">Creating data visualizations and charts</p>
                <p class="text-end  ">Designing website layouts and elements</p>
                <p class=" ">Designing custom typography and lettering</p>
                <p class="text-end  ">Designing custom patterns for branding and packaging</p>
                <p class="text-center ">Creating custom illustrations for prints and posters</p>
                <p class=" m-0">Crafting unique designs</p>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row justify-content-center bo-color">
            <div class="col-lg-5 col-sm-12 p-5">
                <h3 class="my-4">Adobe Premiere</h3>
                <p class="textAlignent">
                    ZAM Developers offers specialized services for Adobe Premiere, empowering video creators and editors to enhance their production workflows and achieve professional results. We develop custom plugins and extensions that automate tedious editing tasks, streamline processes, and integrate seamlessly with other tools in the Adobe Creative Cloud suite. Our team also provides tailored solutions for video effects, transitions, and color grading, ensuring that clients can produce visually stunning content with ease. By leveraging Adobe Premiere's powerful capabilities, ZAM Developers helps clients optimize their video editing projects, enabling them to deliver high-quality, polished videos efficiently and effectively.
                </p>
            </div>
            <div class=" col-lg-5 col-sm-12 text-center align-items-center  align-content-center"> <img src="./img/adobe_premiere.png" class="photoshop-Symbol-size" alt="adobe_premiere-Symbol"></div>
        </div>
    </div>
    <h2 class="graphices-head-color px-5 mt-5">Services</h2>
    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-sm-12 p-5 align-content-center graphices-card1  ">
                <p class="text-center text-bold">Video Editing</p>
                <p class="text-bold"> Corporate Videos</p>
                <p class="text-end text-bold1">Social Media Videos</p>
                <p class="text-bold">Event Videography</p>
                <p class="text-center text-bold1">Commercials and Advertisements</p>
                <p class="text-end text-bold">Motion Graphics and Titles</p>
            </div>
            <div class=" col-lg-5 col-sm-12  p-5 graphices-card  ">
                <p class="text-center  ">Adding transitions and effects</p>
                <p class="">Cutting and trimming footage</p>
                <p class="text-end ">Editing promotional and marketing videos</p>
                <p class="text-center ">Creating Instagram stories and posts</p>
                <p class="text-end  ">Editing Facebook and TikTok videos</p>
                <p class=" ">Editing wedding and event highlights</p>
                <p class="text-end  ">Adding motion graphics and visual effects</p>
                <p class="text-center ">Editing aerial videos</p>
                <p class=" m-0">Producing documentary films</p>
            </div>
        </div>
    </div>
</body>

</html>
<?php include("../../includes/footer/footer.php"); ?>