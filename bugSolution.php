function foo(a, b) {
  if (a === null || b === null) {
    return null; // Handle null values
  }
  if (!is_numeric($a) || !is_numeric($b)){
    return "Invalid input"; //Handle non-numeric values
  }
  return $a + $b; // Perform addition
}

//Example of error
echo foo(null, 5); // Returns NULL as expected
echo foo(5, null); //Returns NULL as expected
echo foo(null, null); // Returns NULL as expected
echo foo(5,5); // Returns 10 as expected
echo foo("hello",5); //Returns Invalid Input
