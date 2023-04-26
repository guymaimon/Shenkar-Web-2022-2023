const recs = 3;
const Board = $("#The_Game");
const letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
const boxSize = 80;
let lastLetterIndex;
let new_elem_section;
let second_rec = null;
let clickedSquares = 0;
let waiting = false;

$("#start_game").on("click", function () {
  // Random Letters Function 
    const getRandomLetters = (arr, count) => {
        const lastIndex = Math.floor(Math.random() * (arr.length - 3));
        const letters = [arr[lastIndex], arr[lastIndex + 1], arr[lastIndex + 2]];
     return letters.sort(() => 0.5 - Math.random()).slice(0, count);
  };
  const crr_let = getRandomLetters(letters, 26);

// Iterate for each rectangle element to be created
for (let r = 0; r < recs; r++) {
    // Create a new rectangle element and set its width and height properties
    new_elem_section = $('<section>').css({
      'width': (Board.children().last().width() + 20 || boxSize) + 'px',
      'height': (Board.children().last().height() + 20 || boxSize) + 'px',
    })
    // Set the element's ID attribute to a unique identifier
      .attr('id', 'Rec-' + Board.children().length)
    // Set the element's content to a h3 tag with the current letter
      .html(`<h3>${crr_let[r]}</h3>`);
    // Hide the h3 tag within the new element
        $(new_elem_section.children().first()).toggle();

    //Memory_Game
    new_elem_section.click(function() {
        // If waiting or already clicked 2 squares, return without doing anything
        if (waiting || clickedSquares >= 2) {
          return;
        }
        // Toggle the visibility of the clicked square's children
        $(this).children().toggle();
        // If second square hasn't been clicked yet, set it and increment clickedSquares
        if (!second_rec) {
          second_rec = this;
          clickedSquares++;
          return;
        }
        // If the text in the clicked square doesn't match the second square's text, hide both and wait for 1 second
        if ($(this).text() !== $(second_rec).text()) {
          waiting = true;
          $(this).children().delay(1000).hide(0);
          $(second_rec).children().delay(1000).hide(0);
          // Reset waiting and clickedSquares after 1 second
          setTimeout(function() {
            waiting = false;
            clickedSquares = 0;
          }, 1000);
        } else { // If the text matches, change the background color and remove click event listeners
          $(this).css({ 'background': 'MediumSeaGreen' }).off("click");
          $(second_rec).css({ 'background': 'MediumSeaGreen' }).off("click");
          clickedSquares = 0; // Reset clickedSquares
        }
        second_rec = null; // Reset the second square
      });
    // append the result.
    Board.append(new_elem_section);
  }
});