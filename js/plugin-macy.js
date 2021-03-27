// set mansory gallery
var maingall = $('#w-gallery-container');
if (maingall.length) {
var masonry = new Macy({
        container: '#w-gallery-container',
        trueOrder: false,
        waitForImages: true,
        debug: true,
        columns: 3,
        breakAt: {
          1200: {
            columns: 3,
          },
          940: {
		    columns: 2,
          },
          520: {
            columns: 2,
          },
          400: {
            columns: 1
          }
        }
      });
} else {
   //nothing happen
}
