function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

function testFoo(){
  console.log(foo(1, '1')); // true (unexpected)
  console.log(foo(0, false)); // true (unexpected)
  console.log(foo(null, undefined)); // true (unexpected)
}
testFoo();