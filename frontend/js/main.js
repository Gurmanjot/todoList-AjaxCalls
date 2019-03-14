$(document).ready(function() {
  $.ajax({
    url: "http://try2.local.geekydev.com/backend/",
    type: "GET",

    success: function(response) {
      // console.log(response[0]);
      displ();
    }
  });

  $("#form").submit(function(event) {
    // event.preventDefault();

    var todo = document.getElementById("todo").value;
    console.log(todo);
    $.ajax({
      url: "http://try2.local.geekydev.com/backend/",
      type: "POST",

      data: {
        caption: todo
      },
      success: function(response) {
        // console.log(response[0]);
        displ();
      }
    });
  });

  $("#form3").submit(function() {
    var name = document.getElementById("todo4").value;
    var i = document.getElementById("todo5").value;

    console.log(name);
    console.log(i);

    $.ajax({
      url: "http://try2.local.geekydev.com/backend/",
      type: "PUT",
      data: {
        id: i,
        caption: name
      },
      success: function() {
        console.log("Success");
      }
    });
  });
});
function deleteTodo(id) {
  // console.log(id);
  console.log("delete");
  $.ajax({
    url: "http://try2.local.geekydev.com/backend/",
    type: "DELETE",
    data: { id: id },
    success: function(response) {
      document.getElementById("caption" + response).remove();
    }
  });
}

function updateTodo(i) {
  // console.log(name);
  const full_id = `item-${i}`;
  var na = document.getElementById(full_id).value;
  console.log("update ");
  $.ajax({
    url: "http://try2.local.geekydev.com/backend/",
    type: "PUT",
    data: {
      id: i,
      caption: na
    },
    success: function() {
      displ();
    }
  });
}

displ = () => {
  var list = $("#mylist");
  list.empty();
  $.getJSON("http://try2.local.geekydev.com/backend/", function(response) {
    for (i = 0; i < response.length; i++) {
      var node = document.createElement("LI");

      node.setAttribute("class", "list-group-item");
      node.setAttribute("id", "caption" + response[i]["id"]);
      // document.getElementById(response[i]["id"]).style.border = none;
      //inputbox
      var textnode = document.createElement("INPUT");
      textnode.setAttribute("type", "text");
      textnode.setAttribute("id", `item-${response[i]["id"]}`);
      textnode.setAttribute("value", response[i]["caption"]);
      node.append(textnode);
      //button
      var btn = document.createElement("button");
      btn.innerHTML = "Delete";
      btn.setAttribute("onclick", "deleteTodo(" + response[i]["id"] + ")");
      node.append(btn);

      //button 2
      var upd = document.createElement("button");
      upd.innerHTML = "EDIT";
      upd.setAttribute("onclick", `updateTodo(${response[i]["id"]})`);
      node.append(upd);

      document.getElementById("myList").appendChild(node);
      // var node1 = document.createElement("div");
      // // var textnode = document.createTextNode(response[i]["caption"]);
      // var textnode = document.createElement("INPUT");
      // textnode.setAttribute("type", "text");
      // textnode.setAttribute("value", "+ response[i]['caption'] +");
      // var update = document.createElement("button");

      // // textnode.setAttribute("onchange", updateTodo(response[i]["id"], textnode.value));

      // var btn = document.createElement("button");
      // update.innerHTML = "Edit";
      // btn.innerHTML = "Delete";
      // node1.appendChild(textnode);
      // node1.appendChild(btn);
      // node1.appendChild(update);

      // btn.setAttribute("onclick", "deleteTodo(" + response[i]["id"] + ")");
      // update.setAttribute("onclick", updateTodo(response[i]["id"], textnode.value));
      // node.appendChild(node1);
      // document.getElementById("myList").appendChild(node);
    }
  });
};

// updateTodo(response[i]["id"], textnode.value)
