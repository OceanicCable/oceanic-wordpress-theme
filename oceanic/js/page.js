function showHideField() {
  if(document.empower.chkbox.checked) {
    var anon = confirm("By submitting anonymously, I understand I may not hear back regarding my suggestion(s).");
    if(anon == true) {
      document.getElementById("view").style.display = "none"; 
      document.empower.FIRSTNAME.value = "";
      document.empower.LASTNAME.value = "";
      document.empower.PHONE.value = "";
    } else {
      document.empower.chkbox.checked = false;
    }
  } else {
    document.getElementById("view").style.display = "block";
  }
}

function checkForm() {
  valid = true;
  if(document.empower.SUGGESTION.value == "") { 
    alert("Please enter your suggestion or concern");
    valid = false;
    document.empower.SUGGESTION.focus();
  } else if (document.empower.SOLUTION.value == "") {
    alert("Please enter your solution idea");
    document.empower.SOLUTION.focus();
  }
  return valid;
}

function openPurpose() {
  OpenWindow = window.open("", "newWin", "height=400, width=550, toolbar=no, scrollbars=1, menubar=no");
  OpenWindow.document.write("<html>");
  OpenWindow.document.write("<head><title>Tech Connect<\/title><\/head>");
  OpenWindow.document.write("<body>");
  OpenWindow.document.write("<img src='http://www.oceanic.com/wp-content/uploads/2014/09/header_purpose2.png'>");
  OpenWindow.document.write("<ul><li><font face='arial' size='-1'>To have a vehicle for employees to voice their ideas, concerns, solutions, etc.<\/font><\/li><\/ul>");
  OpenWindow.document.write("<\/p>");
  OpenWindow.document.write("<a href='javascript:window.close()'><font face='arial' size='-1'>Close<\/font><\/a>");
  OpenWindow.document.write("<\/body>");
  OpenWindow.document.write("<\/html>");
  OpenWindow.document.close()
  self.name="main"
}

function openGuidelines() {
  OpenWindow = window.open("", "newWin", "height=400, width=550, toolbar=no, scrollbars=1, menubar=no");
  OpenWindow.document.write("<html>");
  OpenWindow.document.write("<title>Tech Connect<\/title>");
  OpenWindow.document.write("<body>");
  OpenWindow.document.write("<img src='http://www.oceanic.com/wp-content/uploads/2014/09/header_guidelines2.png'>");
  OpenWindow.document.write("<ul><li><font face='arial' size='-1'>\"Tech Connect\" should not be used as a complaint box, but instead be used as a true Suggestion Box.<\/font><\/li>");
  OpenWindow.document.write("<li><font face='arial' size='-1'>Do not only state an issue\/problem.  Help us by providing a recommended solution.<\/font><\/li>");
  OpenWindow.document.write("<li><font face='arial' size='-1'>Suggestions should have a positive impact on the team\/department\/company, not just on an individual.<\/font><\/li>");
  OpenWindow.document.write("<li><font face='arial' size='-1'>Suggestions should be timely and have a realistic and achievable timeframe for completion\/implementation.<\/font><\/li>");
  OpenWindow.document.write("<li><font face='arial' size='-1'>Suggestions should be realistic in nature.  It should make sense and be beneficial to the team\/department\/company.<\/font><\/li>");
  OpenWindow.document.write("<li><font face='arial' size='-1'>Suggestions should consider the cost impact to the company and understand that some changes may be cost prohibitive.<\/font><\/li><\/ul>");
  OpenWindow.document.write("<\/p>");
  OpenWindow.document.write("<a href='javascript:window.close()'><font face='arial' size='-1'>Close<\/font><\/a>");
  OpenWindow.document.write("<\/body><\/html>");
  OpenWindow.document.close()
  self.name="main"
}

function openInfo() {
  OpenWindow = window.open("", "newWin", "height=400, width=550, toolbar=no, scrollbars=1, menubar=no");
  OpenWindow.document.write("<html><title>Tech Connect<\/title>");
  OpenWindow.document.write("<body>");
  OpenWindow.document.write("<img src='http://www.oceanic.com/wp-content/uploads/2014/09/header_info2.png'>");
  OpenWindow.document.write("<ul><li><font face='arial' size='-1'>Tech Connect will be online.<\/font><\/li>");
  OpenWindow.document.write("<li><font face='arial' size='-1'>Submissions may be submitted anonymously if desired.<\/font><\/li>");
  OpenWindow.document.write("<li><font face='arial' size='-1'>Employee will be prompted to type his\/her name when making a suggestion.  However, if an employee would like to submit a suggestion anonymously, he/she will be able to do so.  If an employee does not type his\/her name, we will not be able to get back to that employee on his\/her suggestion directly.<\/font><\/li>");
  OpenWindow.document.write("<li><font face='arial' size='-1'>Tech Connect will be rolled out to Field Operations at this time.  We will be opening it up to other departments in the future.<\/font><\/li>");
  OpenWindow.document.write("<li><font face='arial' size='-1'>HR will review all submissions to Tech Connect on a bi-monthly basis.<\/font><\/li>"); 
  OpenWindow.document.write("<li><font face='arial' size='-1'>If the suggestion has a broad impact across multiple departments, it will go to the Executive Committee for review.  If the suggestion has a more focused impact which impacts a department or specific group, it will be reviewed by HR or applicable department head.  HR will communicate to employees any new ideas, changes, etc. resulting from suggestions to Tech Connect.  Remember, we want to hear what you have to say.<\/font><\/li>");
  OpenWindow.document.write("<li><font face='arial' size='-1'>For those suggestions with broad impact, the Executive Committee will assign a \"suggestion owner\" to lead smaller teams to work on the selected suggestions.<\/font><\/li><\/ul>");
  OpenWindow.document.write("<\/p>");
  OpenWindow.document.write("<a href='javascript:window.close()'><font face='arial' size='-1'>Close<\/font><\/a>");
  OpenWindow.document.write("<\/body><\/html>");
  OpenWindow.document.close()
  self.name="main"
}
