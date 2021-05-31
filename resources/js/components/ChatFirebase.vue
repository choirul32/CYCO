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
                            <p>{{ message.text }}</p>
                            <!-- <span class="time_date">{{ message.dateHuman }}</span> -->
                        </div>
                    </div>
                </div>
                <div v-else class="incoming_msg">
                    <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="">
                    </div>
                    <div class="received_msg">
                        <div class="received_withd_msg">
                        <div style="display: flex;">
                            <h5 style="margin: 8px 10px 0;">{{ message.username}}</h5>
                            <!-- <span class="time_date">{{ message.created_at}}</span> -->
                        </div>
                        <p>{{ message.text }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="input-group">
            <input v-model="showMessage" id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here...">

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
      messages: []
    };
  },
  created() {
    console.log(this.name_user);
  },
  methods: {
    updateUsername() {
      this.name = this.userName;
      console.log(this.userName);
      this.userName = "";
    },
    sendMessage() {
      const message = {
        text: this.showMessage,
        username: this.userName,
        role_id: this.role_id,
        user_id: this.user_id,
        room: this.room
      };
      fire
        .database()
        .ref("messages")
        .push(message);
      this.showMessage = "";
    }
  },
  mounted() {
    let viewMessage = this;
    const itemsRef = fire.database().ref("messages").orderByChild('room').equalTo(1);
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
          text: data[key].text
        });
      });
      viewMessage.messages = messages;
    });
  }
};
</script>
