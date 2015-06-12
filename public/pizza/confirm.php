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
      <h2>Pizza Order Confirmation</h2>

      <form action="." method="post">
        <fieldset>
        <label for="size">Size</label>
        <input type="text" name="size" id="size" value="x-large" readonly>
        <label for="meat">Meat</label>
        <input type="text" name="meat" id="meat" value="Canadian Bacon" readonly>
        <h3>Toppings - choose as many as you want</h3>
        <label for="cheesetopping">Extra Cheese</label>
        <input type="checkbox" name="topping[]" id="cheesetopping" value="x-cheese" <?php echo ( inArray($toppings,"x-cheese") == true ? "checked":"" )  ?>>
        <label for="mushroomtopping">Mushrooms</label>
        <input type="checkbox" name="topping[]" id="mushroomtopping" value="Mushrooms" <?php echo (inArray($toppings,"Mushrooms") == true ? "checked":"") ?>>
        <label for="pineappletopping">Pineapple</label>
        <input type="checkbox" name="topping[]" value="Pineapple" <?php echo (inArray($toppings,"Pineapple") == true ? "checked":"") ?>>
        <label for="olivetopping">Olives</label>
        <input type="checkbox" name="topping[]" id="olivetopping" value="Olives" <?php echo (inArray($toppings,"Olives") == true ? "checked":"") ?>>
        <label for="tomatotopping">Tomato</label>
        <input type="checkbox" name="topping[]" id="tomatotopping" value="Tomatos" <?php echo (inArray($toppings,"Tomatos") == true ? "checked":"") ?>>
        <label for="oniontopping">Onions</label>
        <input type="checkbox" name="topping[]" id="oniontopping" value="Onions" <?php echo (inArray($toppings,"Onions") == true ? "checked":"") ?>>
        <label for="belltopping">Bell Pepper</label>
        <input type="checkbox" name="topping[]" id="belltopping" value="Bell" <?php echo (inArray($toppings,"Bell") == true ? "checked":"") ?>>
        <label for="jalapenotopping">Jalapeno Peppers</label>
        <input type="checkbox" name="topping[]" id="jalapenotopping" value="Jalapeno" <?php echo (inArray($toppings,"Jalapeno") == true ? "checked":"") ?>>
        <label>&nbsp;</label>
        <input type="submit" name="button" id="submitbutton" value="Confirm">
        <input type="hidden" name="action" value="default">
        </fieldset>
      </form>
    </main>
  </body>
</html>
