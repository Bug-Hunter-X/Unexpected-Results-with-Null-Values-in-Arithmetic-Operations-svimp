function foo(a, b) {
  if (a === null || b === null) {
    return null; // Handle null values
  }
  return a + b; // Perform addition
}

//Example of error
echo foo(null, 5); // Returns NULL as expected
echo foo(5, null); //Returns NULL as expected
echo foo(null, null); // Returns NULL as expected
echo foo(5,5); // Returns 10 as expected
