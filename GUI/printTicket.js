let array = new Array(20);
for (let i = 0; i < array.length; i++) {
  array[i] = false;
}

array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

const parkingSpot = () => {
  for (let i = 0; i < array.length; i++) {
    if (i == false) {
      return array[i];
    }
  }
}

parkingSpot();

const userLeave = (i) => {
  return array[i] = true;
}