// <code class="JavaScript"></code>


console.log('alex')
var myCode = document.createElement('code');

var textnode = document.createTextNode('\n\nvar nurseOlynyk = ...');

myCode.appendChild(textnode);




var codeIds = ['es5-one-code',
               'es5-two-code',
               'es5-three-code',
               'es5-four-code'];
var percentIds = ['es5-one-percent',
                  'es5-two-percent',
                  'es5-three-percent',
                  'es5-four-percent'];

var codeBlocks = ['\n\nvar nurseOlynyk = ...',
                  '\n\nvar nurseDurant = ...',
                  '\n\nvar myString = \'str\' + x',
                  'var HospitalEmployee = \n  function () {\n    function \n    HospitalEmployee(name) {\n...'];

var codeIncrement = 0;


codeIds.forEach(function(codeId) {
	// Add es5 code blocks to right side of web page.
  var myCode = document.createElement('code');
  var textnode = document.createTextNode(codeBlocks[codeIncrement]);
  myCode.appendChild(textnode);
  document.getElementById(codeId).appendChild(myCode);


  // Remove empty ES5 compatibility
  var list = document.getElementById(percentIds[codeIncrement]);
  list.removeChild(list.childNodes[1]);
  
  // Add paragraph with new % compatibility
  var myParagraph = document.createElement('p');
  var textnode = document.createTextNode('98% Compatibility');
  myParagraph.appendChild(textnode);
  document.getElementById(percentIds[codeIncrement]).appendChild(myParagraph);

  codeIncrement++;
});


// Add the new paragraph compatibility




