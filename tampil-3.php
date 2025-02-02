<?php
  $main_course = [
    'Cheeseburger' => 200,
    'Cheese Sandwich' => 250,
    'Chicken Burgers' => 300,
    'Spicy Chicken' => 350,
    'Hot Dog' => 350
  ];

  $appetizers = [
    'Fruit Salad' => 100,
    'Cocktails' => 200,
    'Nuggets' => 200,
    'Sandwich' => 200,
    'French Fries' => 250
  ];

  $beverages = [
    'Milk Shake' => 150,
    'Iced Tea' => 70,
    'Orange Juice' => 120,
    'Lemon Tea' => 70,
    'Coffee' => 100
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Menu</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #2b2b2b;
      color: white;
      margin: 0;
      padding: 20px;
    }
    .menu-container {
      max-width: 600px;
      margin: auto;
      background-color: #1a1a1a;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }
    h1, h2 {
      text-align: center;
    }
    .section {
      margin-bottom: 20px;
    }
    .section h3 {
      background-color: orange;
      padding: 10px;
      border-radius: 5px;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    li {
      display: flex;
      justify-content: space-between;
      padding: 8px 0;
      border-bottom: 1px solid #444;
    }
    .contact {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="menu-container">
    <h1>FOOD MENU</h1>
    <p style="text-align: center;">Delicious + Healthy</p>

    <div class="section">
      <h3>Main Course</h3>
      <ul>
        <?php foreach ($main_course as $item => $price) { ?>
          <li><?php echo $item; ?><span>₹<?php echo $price; ?></span></li>
        <?php } ?>
      </ul>
    </div>

    <div class="section">
      <h3>Appetizers</h3>
      <ul>
        <?php foreach ($appetizers as $item => $price) { ?>
          <li><?php echo $item; ?><span>₹<?php echo $price; ?></span></li>
        <?php } ?>
      </ul>
    </div>

    <div class="section">
      <h3>Beverages</h3>
      <ul>
        <?php foreach ($beverages as $item => $price) { ?>
          <li><?php echo $item; ?><span>₹<?php echo $price; ?></span></li>
        <?php } ?>
      </ul>
    </div>

    <div class="contact">
      <p>📞 123-456-7890</p>
      <p>📍 Food Palace</p>
    </div>
  </div>
</body>
</html>
