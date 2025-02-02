<?php 

$pageTitle = 'About us';
$pageKey = 'aboutUs';
$AboutPage = true;
include 'inc/header.inc.php'; 

?>
    <h1 <?php if($AboutPage == true) echo 'style="color: red;"'; ?> >About us</h1>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim suscipit recusandae inventore aut. Nobis, fuga odio blanditiis temporibus voluptate sequi reiciendis veniam beatae cumque ab repellat quasi? Quisquam temporibus earum dicta tenetur laudantium maiores itaque, tempora praesentium distinctio doloribus nesciunt harum aliquid libero eos hic soluta nobis expedita inventore, voluptatibus minus ipsum, pariatur alias totam recusandae? Vitae culpa consectetur quisquam nesciunt eum sunt error earum quaerat rem beatae recusandae illum nulla quae laudantium, nostrum numquam iure. Similique tenetur et dolorem cumque voluptatum! Aliquam laborum sint nesciunt amet iure temporibus animi facere beatae aspernatur! Dicta illo quos autem ullam harum dignissimos.
    </p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error fugiat consectetur esse sapiente nostrum, saepe distinctio molestiae placeat tempore consequuntur facere laudantium sequi ipsa vero delectus architecto, voluptate velit incidunt.</p>
    <figure style="text-align: center;">
      <img style="max-width: 20rem;" 
           src="images/pexels-fwstudio-172289.jpg" 
           alt="Our amazing restaurant" />
      <figcaption>Our amazing restaurant</figcaption>
    </figure>
    <p>
      Our use of natural ingredients goes beyond just a selling point;
      it's a promise to our guests and to ourselves. We see each meal
      as an opportunity to celebrate the bounty of nature, offering a
      culinary experience that is both delicious and nourishing.
      Every herb, spice, and vegetable is chosen with care,
      accentuating the natural flavors and textures of our dishes.
      It is this focus on natural, high-quality ingredients that
      transforms dining at Culinary Cove into more than just a
      meal—it becomes a journey into a world of pure, unadulterated
      taste.
    </p>

<?php include 'inc/footer.inc.php'; ?>