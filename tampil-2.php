<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .menu-container {
            background-color: #1c1c1c;
            padding: 20px;
            border-radius: 15px;
            width: 350px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .menu-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .menu-header h1 {
            font-size: 28px;
            margin: 0;
        }

        .menu-header p {
            font-size: 14px;
            color: #aaa;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            background-color: orange;
            padding: 10px;
            border-radius: 10px;
            font-size: 18px;
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
            border-bottom: 1px solid #444;
        }

        .menu-item:last-child {
            border-bottom: none;
        }

        .contact {
            text-align: center;
            margin-top: 20px;
        }

        .contact p {
            background-color: orange;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 20px;
            color: #000;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <div class="menu-header">
            <h1>FOOD MENU</h1>
            <p>Delicious + Healthy</p>
        </div>

        <div class="section">
            <h2>Main Course</h2>
            <div class="menu-item"><span>Cheeseburger</span><span>₹200</span></div>
            <div class="menu-item"><span>Cheese Sandwich</span><span>₹250</span></div>
            <div class="menu-item"><span>Chicken Burgers</span><span>₹300</span></div>
            <div class="menu-item"><span>Spicy Chicken</span><span>₹350</span></div>
            <div class="menu-item"><span>Hot Dog</span><span>₹350</span></div>
        </div>

        <div class="section">
            <h2>Appetizers</h2>
            <div class="menu-item"><span>Fruit Salad</span><span>₹100</span></div>
            <div class="menu-item"><span>Cocktails</span><span>₹200</span></div>
            <div class="menu-item"><span>Nuggets</span><span>₹200</span></div>
            <div class="menu-item"><span>Sandwich</span><span>₹250</span></div>
            <div class="menu-item"><span>French Fries</span><span>₹250</span></div>
        </div>

        <div class="section">
            <h2>Beverages</h2>
            <div class="menu-item"><span>Milk Shake</span><span>₹75</span></div>
            <div class="menu-item"><span>Iced Tea</span><span>₹50</span></div>
            <div class="menu-item"><span>Orange Juice</span><span>₹70</span></div>
            <div class="menu-item"><span>Lemon Tea</span><span>₹60</span></div>
            <div class="menu-item"><span>Coffee</span><span>₹50</span></div>
        </div>

        <div class="contact">
            <p>📞 123-456-7890 | 🏨 Jodhpur Palace</p>
        </div>
    </div>
</body>
</html>