<template>
  <div id="app">
    <!-- Login section -->

    <!-- Chat section -->
    <div class="mt-3">
        <div class="msg_history">
            <div v-for="(message, keys) in messages" :key="keys">
                <div v-if="message.role_id == role_id_ && message.user_id == user_id_">
                    <div class="outgoing_msg">
                        <div class="sent_msg">
                            <p>{{ message.text }} <span>{{ message.time}}</span></p>
                            <!-- <span class="time_date">{{ message.dateHuman }}</span> -->
                        </div>
                    </div>
                </div>
                <div v-else class="incoming_msg row">
                    <div class="incoming_msg_img col-1"> <img src="https://ptetutorials.com/images/user-profile.png" alt="">
                    </div>
                    <div class="received_msg col">
                        <div class="received_withd_msg">
                        <div style="display: flex;">
                            {{ message.username}}
                            <!-- <span class="time_date">{{ message.created_at}}</span> -->
                        </div>
                        <p>{{ message.text }} <span>{{ message.time}}</span></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="input-group">
            <input v-model="showMessage" id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." @keyup.enter="sendMessage">

            <span class="input-group-btn">
                <button class="btn btn-primary" id="btn-chat" @click="sendMessage">
                    Send
                </button>
            </span>
        </div>
    </div>
  </div>

</template>

<script>
import fire from "../fire";
export default {
  props: ['name_user', "role_id_", "user_id_", "room_"],
  name: "App",
  data() {
    return {
      userName: this.name_user,
      name: null,
      showMessage: "",
      role_id: this.role_id_,
      user_id: this.user_id_,
      room: this.room_,
      time: "",
      messages: []
    };
  },
  created() {
    console.log(this.room_);
  },
  methods: {
    updateUsername() {
      this.name = this.userName;
      console.log(this.userName);
      this.userName = "";
    },
    sendMessage() {
        this.getNowTime();
      const message = {
        text: this.showMessage,
        username: this.userName,
        role_id: this.role_id,
        user_id: this.user_id,
        room: this.room,
        time: this.time
      };
      fire
        .database()
        .ref("messages")
        .push(message);
      this.showMessage = "";
    },
    getNowTime() {
        const today = new Date();
        const time = today.getHours() + ":" + today.getMinutes();
        this.time = time;
    }
  },
  mounted() {
    let viewMessage = this;
    const itemsRef = fire.database().ref("messages").orderByChild('room').equalTo(this.room_);
    itemsRef.on("value", snapshot => {
      let data = snapshot.val();
      let messages = [];
      Object.keys(data).forEach(key => {
        messages.push({
          id: key,
          username: data[key].username,
          role_id: data[key].role_id,
          user_id: data[key].user_id,
          room: data[key].room,
          time: data[key].time,
          text: data[key].text
        });
      });
      viewMessage.messages = messages;
    });
  }
};
</script>
