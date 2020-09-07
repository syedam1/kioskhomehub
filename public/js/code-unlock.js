(function() {
  //   JQuery
  //   JQuery AutoTab Magic

  // Form Parent
  var clearInputs, form, formInputs, inputCode, validCode, validateCode;

  form = $(".code_input");

  // Form Inputs
  formInputs = $(form).children("input");

  // Valid Code
  validCode = "1234";

  //JQuery AutoTab to automatically move forward when maximum length of input is reached.
  $(formInputs).autotab_magic();

  // Returns the code which is inputted into each of the form inputs
  inputCode = function() {
    var code;
    code = []; // Blank array (probably a better way to do this
    $(formInputs).each(function() { // Selects each form input object
      return code.push($(this).val()); // Pushes each form input value to the [code] array
    });
    return code.join(""); // Returns the code array in string form (joined)
  };

  
  // Checks the code which is returned from inputCode()
  validateCode = function() {
    var c;
    c = inputCode(); // Runs inputCode() to have a code string to validate
    if (c === validCode) { // Checks code against validCode variable
      $(form).removeClass("error").addClass("d-none"); // Adds success class and removes error class from form
      $(".burger-nav").show(); // Shows the burger menu
      $(".burger-nav").addClass("animate__bounceInUp");
      $(".code-success").show(); // Shows the success message
      $(".hint").hide(); // Hides the hint
      return false; // End of successful code input
    } else if (c.length === 4) { // Checks if code is 4 digits long
      $(form).addClass("code-error");
      $(".hint").show(); // Shows the hint
      return false; // End of successful code input
    } else {
      $(form).addClass("error").removeClass("success"); // Adds error class, removes success class from form
      return false; // End of unsuccessful input
    }
  };

  
  // Clears out all the inputs and sets the focus to the first one
  clearInputs = function() {
    $(formInputs).first().focus(); // Set focus to first input
    $(formInputs).val(""); // Sets input values to null
    $(".hint").hide(); // Hides the hint
    return $(form).removeClass(); // Remove classes from form
  };

  
  // Initiates code validation if the key pressed isn't backspace or delete
  $(formInputs).keyup(function() { // On keyup in any of the form inputs
    if (event.keyCode === 8 || event.keyCode === 46) { // Maps to the backspace and delete key
      clearInputs(); // Clears the form
      return false; // End of backspace event
    } else {
      return validateCode(); // Run validation function
    }
  });

  


}).call(this);

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFBQTs7OztBQUFBLE1BQUEsV0FBQSxFQUFBLElBQUEsRUFBQSxVQUFBLEVBQUEsU0FBQSxFQUFBLFNBQUEsRUFBQTs7RUFJQSxJQUFBLEdBQU8sQ0FBQSxDQUFFLGFBQUYsRUFKUDs7O0VBT0EsVUFBQSxHQUFhLENBQUEsQ0FBRSxJQUFGLENBQU8sQ0FBQyxRQUFSLENBQWlCLE9BQWpCLEVBUGI7OztFQVVBLFNBQUEsR0FBWSxPQVZaOzs7RUFhQSxDQUFBLENBQUUsVUFBRixDQUFhLENBQUMsYUFBZCxDQUFBLEVBYkE7OztFQWdCQSxTQUFBLEdBQVksUUFBQSxDQUFBLENBQUE7QUFDVixRQUFBO0lBQUEsSUFBQSxHQUFPLEdBQVA7SUFDQSxDQUFBLENBQUUsVUFBRixDQUFhLENBQUMsSUFBZCxDQUFtQixRQUFBLENBQUEsQ0FBQSxFQUFBO2FBQ2pCLElBQUksQ0FBQyxJQUFMLENBQVUsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLEdBQVIsQ0FBQSxDQUFWLEVBRGlCO0lBQUEsQ0FBbkI7V0FHQSxJQUFJLENBQUMsSUFBTCxDQUFVLEVBQVYsRUFMVTtFQUFBLEVBaEJaOzs7O0VBeUJBLFlBQUEsR0FBZSxRQUFBLENBQUEsQ0FBQTtBQUNiLFFBQUE7SUFBQSxDQUFBLEdBQUksU0FBQSxDQUFBLEVBQUo7SUFDQSxJQUFHLENBQUEsS0FBSyxTQUFSO01BQ0UsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLFdBQVIsQ0FBb0IsT0FBcEIsQ0FBNEIsQ0FBQyxRQUE3QixDQUFzQyxTQUF0QyxFQUFBO01BQ0EsQ0FBQSxDQUFFLE9BQUYsQ0FBVSxDQUFDLE9BQVgsQ0FBQSxFQURBO2FBRUEsTUFIRjtLQUFBLE1BSUssSUFBRyxDQUFDLENBQUMsTUFBRixLQUFZLENBQWY7YUFDSCxDQUFBLENBQUUsT0FBRixDQUFVLENBQUMsTUFBWCxDQUFBLEVBREc7S0FBQSxNQUFBO01BR0gsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLFFBQVIsQ0FBaUIsT0FBakIsQ0FBeUIsQ0FBQyxXQUExQixDQUFzQyxTQUF0QyxFQUFBO2FBQ0EsTUFKRzs7RUFOUSxFQXpCZjs7OztFQXVDQSxXQUFBLEdBQWMsUUFBQSxDQUFBLENBQUE7SUFDWixDQUFBLENBQUUsVUFBRixDQUFhLENBQUMsS0FBZCxDQUFBLENBQXFCLENBQUMsS0FBdEIsQ0FBQSxFQUFBO0lBQ0EsQ0FBQSxDQUFFLFVBQUYsQ0FBYSxDQUFDLEdBQWQsQ0FBa0IsRUFBbEIsRUFEQTtXQUVBLENBQUEsQ0FBRSxJQUFGLENBQU8sQ0FBQyxXQUFSLENBQUEsRUFIWTtFQUFBLEVBdkNkOzs7O0VBOENBLENBQUEsQ0FBRSxVQUFGLENBQWEsQ0FBQyxLQUFkLENBQW9CLFFBQUEsQ0FBQSxDQUFBLEVBQUE7SUFDbEIsSUFBRyxLQUFLLENBQUMsT0FBTixLQUFpQixDQUFqQixJQUFzQixLQUFLLENBQUMsT0FBTixLQUFpQixFQUExQztNQUNFLFdBQUEsQ0FBQSxFQUFBO2FBQ0EsTUFGRjtLQUFBLE1BQUE7YUFJRSxZQUFBLENBQUEsRUFKRjs7RUFEa0IsQ0FBcEIsRUE5Q0E7Ozs7RUF1REEsQ0FBQSxDQUFFLFVBQUYsQ0FBYSxDQUFDLEtBQWQsQ0FBb0IsUUFBQSxDQUFBLENBQUE7V0FDbEIsV0FBQSxDQUFBLEVBRGtCO0VBQUEsQ0FBcEI7QUF2REEiLCJzb3VyY2VzQ29udGVudCI6WyIjICAgSlF1ZXJ5XG4jICAgSlF1ZXJ5IEF1dG9UYWIgTWFnaWNcblxuIyBGb3JtIFBhcmVudFxuZm9ybSA9ICQoXCIuY29kZV9pbnB1dFwiKVxuXG4jIEZvcm0gSW5wdXRzXG5mb3JtSW5wdXRzID0gJChmb3JtKS5jaGlsZHJlbiBcImlucHV0XCJcblxuIyBWYWxpZCBDb2RlXG52YWxpZENvZGUgPSBcIjEyMzRcIlxuXG4jSlF1ZXJ5IEF1dG9UYWIgdG8gYXV0b21hdGljYWxseSBtb3ZlIGZvcndhcmQgd2hlbiBtYXhpbXVtIGxlbmd0aCBvZiBpbnB1dCBpcyByZWFjaGVkLlxuJChmb3JtSW5wdXRzKS5hdXRvdGFiX21hZ2ljKClcblxuIyBSZXR1cm5zIHRoZSBjb2RlIHdoaWNoIGlzIGlucHV0dGVkIGludG8gZWFjaCBvZiB0aGUgZm9ybSBpbnB1dHNcbmlucHV0Q29kZSA9IC0+XG4gIGNvZGUgPSBbXSAjIEJsYW5rIGFycmF5IChwcm9iYWJseSBhIGJldHRlciB3YXkgdG8gZG8gdGhpc1xuICAkKGZvcm1JbnB1dHMpLmVhY2ggLT4gIyBTZWxlY3RzIGVhY2ggZm9ybSBpbnB1dCBvYmplY3RcbiAgICBjb2RlLnB1c2ggJCh0aGlzKS52YWwoKSAjIFB1c2hlcyBlYWNoIGZvcm0gaW5wdXQgdmFsdWUgdG8gdGhlIFtjb2RlXSBhcnJheVxuXG4gIGNvZGUuam9pbiBcIlwiICMgUmV0dXJucyB0aGUgY29kZSBhcnJheSBpbiBzdHJpbmcgZm9ybSAoam9pbmVkKVxuXG5cbiMgQ2hlY2tzIHRoZSBjb2RlIHdoaWNoIGlzIHJldHVybmVkIGZyb20gaW5wdXRDb2RlKClcbnZhbGlkYXRlQ29kZSA9IC0+XG4gIGMgPSBpbnB1dENvZGUoKSAjIFJ1bnMgaW5wdXRDb2RlKCkgdG8gaGF2ZSBhIGNvZGUgc3RyaW5nIHRvIHZhbGlkYXRlXG4gIGlmIGMgaXMgdmFsaWRDb2RlICMgQ2hlY2tzIGNvZGUgYWdhaW5zdCB2YWxpZENvZGUgdmFyaWFibGVcbiAgICAkKGZvcm0pLnJlbW92ZUNsYXNzKFwiZXJyb3JcIikuYWRkQ2xhc3MgXCJzdWNjZXNzXCIgIyBBZGRzIHN1Y2Nlc3MgY2xhc3MgYW5kIHJlbW92ZXMgZXJyb3IgY2xhc3MgZnJvbSBmb3JtXG4gICAgJChcIi5oaW50XCIpLmZhZGVPdXQoKSAjIEhpZGVzIHRoZSBoaW50XG4gICAgZmFsc2UgIyBFbmQgb2Ygc3VjY2Vzc2Z1bCBjb2RlIGlucHV0XG4gIGVsc2UgaWYgYy5sZW5ndGggaXMgNCAjIENoZWNrcyBpZiBjb2RlIGlzIDQgZGlnaXRzIGxvbmdcbiAgICAkKFwiLmhpbnRcIikuZmFkZUluKCkgIyBTaG93cyB0aGUgaGludFxuICBlbHNlXG4gICAgJChmb3JtKS5hZGRDbGFzcyhcImVycm9yXCIpLnJlbW92ZUNsYXNzIFwic3VjY2Vzc1wiICMgQWRkcyBlcnJvciBjbGFzcywgcmVtb3ZlcyBzdWNjZXNzIGNsYXNzIGZyb20gZm9ybVxuICAgIGZhbHNlICMgRW5kIG9mIHVuc3VjY2Vzc2Z1bCBpbnB1dFxuXG5cbiMgQ2xlYXJzIG91dCBhbGwgdGhlIGlucHV0cyBhbmQgc2V0cyB0aGUgZm9jdXMgdG8gdGhlIGZpcnN0IG9uZVxuY2xlYXJJbnB1dHMgPSAtPlxuICAkKGZvcm1JbnB1dHMpLmZpcnN0KCkuZm9jdXMoKSAjIFNldCBmb2N1cyB0byBmaXJzdCBpbnB1dFxuICAkKGZvcm1JbnB1dHMpLnZhbCBcIlwiICMgU2V0cyBpbnB1dCB2YWx1ZXMgdG8gbnVsbFxuICAkKGZvcm0pLnJlbW92ZUNsYXNzKCkgIyBSZW1vdmUgY2xhc3NlcyBmcm9tIGZvcm1cblxuXG4jIEluaXRpYXRlcyBjb2RlIHZhbGlkYXRpb24gaWYgdGhlIGtleSBwcmVzc2VkIGlzbid0IGJhY2tzcGFjZSBvciBkZWxldGVcbiQoZm9ybUlucHV0cykua2V5dXAgLT4gIyBPbiBrZXl1cCBpbiBhbnkgb2YgdGhlIGZvcm0gaW5wdXRzXG4gIGlmIGV2ZW50LmtleUNvZGUgaXMgOCBvciBldmVudC5rZXlDb2RlIGlzIDQ2ICMgTWFwcyB0byB0aGUgYmFja3NwYWNlIGFuZCBkZWxldGUga2V5XG4gICAgY2xlYXJJbnB1dHMoKSAjIENsZWFycyB0aGUgZm9ybVxuICAgIGZhbHNlICMgRW5kIG9mIGJhY2tzcGFjZSBldmVudFxuICBlbHNlXG4gICAgdmFsaWRhdGVDb2RlKCkgIyBSdW4gdmFsaWRhdGlvbiBmdW5jdGlvblxuXG5cbiMgQ2xlYXJzIGZvcm0gd2hlbiBjbGlja2luZyBhbnkgb2YgdGhlIGZvcm0gaW5wdXRzXG4kKGZvcm1JbnB1dHMpLmNsaWNrIC0+XG4gIGNsZWFySW5wdXRzKCkgIyBDbGVhcnMgZm9ybVxuIl19
//# sourceURL=coffeescript