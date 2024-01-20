<!DOCTYPE html>
<html>
<body>

<form method= "post" action="<?php   echo $_SERVER['PHP_SELF']; ?>">
  <label for="email">Enter your </label>
  Marks : <input type="text"  name="marks" autocomplete="off">
  <input type="submit" name="submit" value="submit">
</form>
<br>

<?php
if(isset($_REQUEST['submit'])){
$options = array(
"options" => array(
  "min" => 1,
    "max" => 100
)
);

  //echo filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);
  if(filter_input(INPUT_COOKIE,"marks",FILTER_VALIDATE_INT,$options)){
echo "Marks is Valid";

  }else {
echo "Marks is  not Valid";
  }
}

echo " How Are You Updatable Shamim  ";
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel repellendus ex aliquam possimus harum officia non error enim iusto, doloribus omnis et natus ipsa odio corporis. Doloremque illo libero, placeat eum expedita sapiente soluta minima numquam atque repellendus deserunt repudiandae, nihil illum laudantium magni minus officia vel explicabo repellat quos iure aliquam ad. Iure facilis reprehenderit saepe, repudiandae cupiditate aliquam nobis sit, hic nihil non temporibus porro? Eos tempora dignissimos, tempore in doloribus, laboriosam quo suscipit expedita veniam, voluptatem laudantium nesciunt ullam repellat temporibus laborum animi neque nemo vero quidem accusamus numquam. Facere doloribus vel quod necessitatibus beatae iure corrupti minus? Atque, deleniti magni natus voluptatum veniam, non, fugiat eum corporis autem praesentium earum eius deserunt nemo a ratione molestiae? Dignissimos doloremque ratione delectus totam nobis? Vitae, omnis perspiciatis est nulla alias qui facere nobis nesciunt quam ratione maxime similique iusto, consequatur molestiae voluptatem possimus praesentium. Odio laboriosam optio vitae voluptas sit? Consequuntur culpa vitae aliquam voluptatibus nemo veritatis. Nostrum ipsa veritatis omnis quam voluptatum odio praesentium similique autem deserunt quis molestias a, nisi eius dolorem debitis! Sit, beatae fugiat! Optio, beatae! Nisi, iure reprehenderit fugiat modi eos fugit alias debitis quia cumque, deserunt maiores. Soluta sequi dolor odio blanditiis.</p>
 ?>
</body>
</html>
