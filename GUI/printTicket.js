let openSpot = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
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
  return remove;
}
// console.log(park());
// console.log(park());
// console.log(openSpot[0]);
// console.log(closedSpot[0]);
// console.log(leave());

