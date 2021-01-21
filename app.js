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
var count = {};

io.on("connection", socket => {

  console.log("New user connected");

  socket.on('join', function(data) {
    socket.join(data);
    if(!(data in count)){count[data] = 0;};
  })

  socket.on('interest_add_click', function (data) {
    io.to(data).emit('interest_add_click', data);
  })

  socket.on('accept_other_add_click', function (data) {
    io.to(data).emit('accept_other_add_click', data);
  })

  socket.on('Luksub_add_click', function (data) {
    io.to(data).emit('Luksub_add_click', data);
  })

  socket.on('delete_last_append_click', function (data) {
    io.to(data).emit('delete_last_append_click', data);
  })

  socket.on('other_add_click', function (data) {
    io.to(data).emit('other_add_click', data);
  })

  socket.on('reset_click', function (data) {
    io.to(data).emit('reset_click', data);
  })

  //ถึงนี่ + ทำห้องเดี่ยว /// ถ้ากดเลือกเดี่ยว hide link ไว้ไหม // ให้ใส่จำนวน //เอาจำนวนครั้งใส่ array ไว้ตาม room_id
  socket.on("sync_approve", function(data) {
    const allClients = data.client_num;
    approveClients = count[data.room_id];
    approveClients++
    //console.log("Approved Clients: " + approveClients + "/" + io.engine.clientsCount);

    if (approveClients == allClients) {
      //console.log("Approve is synced! Sending start event...");
      io.to(data.room_id).emit('waiting_update', { msg : "Approved : " + approveClients + "/" + allClients });
      io.to(data.room_id).emit("enable_convertpdf");
      count[data.room_id] = approveClients;
      
    } else {
      //console.log("Approve is not synced yet! Waiting...");
      io.to(data.room_id).emit('waiting_update', { msg : "Approved : " + approveClients + "/" + allClients });
      count[data.room_id] = approveClients;
    }   
  })
  
  
});
