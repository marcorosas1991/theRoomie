<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pizza</title>
    <style>
      label, input{
          display: block;
      }
      label[for*=topping],
      input[name*=topping]{
          display: inline;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Pizza Place</h1>
    </header>
    <main>
      <h2>Pizza Order Form</h2>
      <form action="." method="post">
        <fieldset>
        <label for="size">Size</label>
        <input type="text" name="size" id="size" value="x-large" readonly>
        <label for="meat">Meat</label>
        <input type="text" name="meat" id="meat" value="Canadian Bacon" readonly>
        <h3>Toppings - choose as many as you want</h3>
        <label for="cheesetopping">Extra Cheese</label>
        <input type="checkbox" name="topping[]" id="cheesetopping" value="x-cheese">
        <label for="mushroomtopping">Mushrooms</label>
        <input type="checkbox" name="topping[]" id="mushroomtopping" value="Mushrooms">
        <label for="pineappletopping">Pineapple</label>
        <input type="checkbox" name="topping[]" value="Pineapple">
        <label for="olivetopping">Olives</label>
        <input type="checkbox" name="topping[]" id="olivetopping" value="Olives">
        <label for="tomatotopping">Tomato</label>
        <input type="checkbox" name="topping[]" id="tomatotopping" value="Tomatos">
        <label for="oniontopping">Onions</label>
        <input type="checkbox" name="topping[]" id="oniontopping" value="Onions">
        <label for="belltopping">Bell Pepper</label>
        <input type="checkbox" name="topping[]" id="belltopping" value="Bell">
        <label for="jalapenotopping">Jalapeno Peppers</label>
        <input type="checkbox" name="topping[]" id="jalapenotopping" value="Jalapeno">
        <label>&nbsp;</label>
        <input type="submit" name="button" id="submitbutton" value="Order">
        <input type="hidden" name="action" value="confirm">
        </fieldset>
      </form>
    </main>
  </body>
</html>
