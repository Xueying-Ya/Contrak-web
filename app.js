const express = require("express");
const socketio = require("socket.io");
const app = express();

app.set("view engine", "ejs");
app.set('views', path.join(__dirname, './views'));
app.use(express.static("public"));

app.get("/", (req, res) => {
  res.render("index");
});

const server = app.listen(process.env.PORT || 3000, () => {
  console.log("server is running...");
});

// Initialize socket for the server
const io = socketio(server);

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

});
