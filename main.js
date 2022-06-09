function loadFile() {
  document.getElementById("contact").innerHTML = "";
  var uploadFile = document.getElementById("uploadFile").files[0];
  var fileReader = new FileReader();
  fileReader.onload = function () {
    let outArr = fileReader.result.trim().split("\n\n");
    let table = document.createElement("table");
    let tbody = document.createElement("tbody");
    table.appendChild(tbody);
    for (let i = 0; i < outArr.length; i++) {
      let inArr = outArr[i].split("\n");
      let tr = document.createElement("tr");
      let td = document.createElement("td");
      var info = "";
      for (let j = 0; j < inArr.length; j++) {
        info += inArr[j] + "<br />";
      }
      td.innerHTML = info.trim();
      td.style.border = "2px white solid";
      tr.appendChild(td);
      tbody.appendChild(tr);
    }
    document.getElementById("contact").appendChild(table);
  }
  fileReader.readAsText(uploadFile, "UTF-8");
}

function submitContactMsg() {
  if (document.getElementById("name").value == "" || document.getElementById("email").value == "" || document.getElementById("number").value == "" || document.getElementById("msg").value == "")
    return;
  let fname = "Contact Details";
  let data = document.getElementById("name").value + "\n" + document.getElementById("email").value + "\n" + document.getElementById("number").value + "\n" + document.getElementById("msg").value;
  var file = new File([data], fname, { type: "text/plain" });
  let fileurl = window.URL.createObjectURL(file);
  let aTag = document.createElement("a");
  aTag.href = fileurl;
  aTag.download = fname;
  aTag.click();
}

function processLogin() {
  let uname = document.getElementById('uname').value;
  let pword = document.getElementById('pword').value;
  if (uname == "admin" && pword == "123456") {
    window.open("../redirect.php");
    sessionStorage.setItem("name", "Devansh");
    sessionStorage.setItem("time", (new Date()).toLocaleString());
    sessionStorage.setItem("time", (new Date()).toLocaleString());
    sessionStorage.setItem("user_agent", navigator.userAgent());
  }
  else {
    window.alert("Try Again!");
  }
}