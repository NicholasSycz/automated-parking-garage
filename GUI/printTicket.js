/*
1. Creates two arrays that will hold the users spot.
2. Either park or leave will be called and will reorganize the arrays for the next possible customer.
*/

let openSpot = Array.from(new Array(100), (x, i) => i + 1);
let closedSpot = [];

const park = () => {
  let remove = openSpot.shift();
  closedSpot.push(remove);
  closedSpot.sort();
  return remove;
}

const leave = () => {
  let remove = closedSpot.shift();
  openSpot.push(remove);
  openSpot.sort();
}

console.log(openSpot);
// console.log(park());
// console.log(park());
// console.log(openSpot[0]);
// console.log(closedSpot[0]);
// console.log(leave());
// console.log(openSpot);
// console.log(closedSpot);


