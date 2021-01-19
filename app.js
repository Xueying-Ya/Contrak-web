const express = require("express");
const socketio = require("socket.io");
const app = express();

app.set("view engine", "ejs");
app.use(express.static("public"));

app.get("/", (req, res) => {
  res.render("index");
});

const server = app.listen(process.env.PORT || 3000, () => {
  console.log("server is running...");
});

// Initialize socket for the server
const io = socketio(server);
var approveClients = 0;

io.on("connection", socket => {
  console.log("New user connected");

  socket.username = "Anonymous"

  socket.on("change_username", data => {
    socket.username = data.username
  })

  socket.on('interest_add_click', function (data) {
    io.emit('interest_add_click', data);
  })

  socket.on('accept_other_add_click', function (data) {
    io.emit('accept_other_add_click', data);
  })

  socket.on('Luksub_add_click', function (data) {
    io.emit('Luksub_add_click', data);
  })

  socket.on('delete_last_append_click', function (data) {
    io.emit('delete_last_append_click', data);
  })

  socket.on('other_add_click', function (data) {
    io.emit('other_add_click', data);
  })

  socket.on('reset_click', function (data) {
    io.emit('reset_click', data);
  })

  socket.on("sync_approve", function() {
    //console.log("Client approve!");
    approveClients++;
    //console.log("Approved Clients: " + approveClients + "/" + io.engine.clientsCount);
    if (approveClients == io.engine.clientsCount) {
      //console.log("Approve is synced! Sending start event...");
      io.sockets.emit('waiting_update', { msg : "Approved : " + approveClients + "/" + io.engine.clientsCount });
      io.sockets.emit("enable_convertpdf");
      approveClients = 0;
    } else {
      console.log("Approve is not synced yet! Waiting...");
      io.sockets.emit('waiting_update', { msg : "Approved : " + approveClients + "/" + io.engine.clientsCount });
    }   
  })
  
});
