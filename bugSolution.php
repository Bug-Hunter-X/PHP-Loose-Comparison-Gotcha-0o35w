function foo(a, b) {
  // Use strict comparison (===) to avoid type juggling surprises
  if (a === b) {
    return true;
  }
  return false;
}

function testFoo(){
  console.log(foo(1, '1')); // false
  console.log(foo(0, false)); // false
  console.log(foo(null, undefined)); // false
}
testFoo();