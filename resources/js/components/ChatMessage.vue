<template>
<div>
    <div v-for="message in messages">
        <div v-if="message.role_id == role_id && message.user_id == user_id">
            <div class="outgoing_msg">
                <div class="sent_msg">
                    <p>{{ message.message }}</p>
                    <!-- <span class="time_date">{{ message.dateHuman }}</span> -->
                </div>
            </div>
        </div>
        <div v-else class="incoming_msg">
            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
            </div>
            <div class="received_msg">
                <div class="received_withd_msg">
                   <p>{{ message.message }}</p>
                    <!-- <span class="time_date">{{ message.dateHuman }}</span> -->
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
  export default {
    props: ['messages', 'role_id', 'user_id', 'room'],

    created() {
        this.setRoomId();
        this.$emit('loadchat', {
            room: this.room
        });
    },
    methods: {
            setRoomId() {
                this.$emit('setRoom', {
                    room: this.room
                });

                this.newMessage = ''
            }
        }
  };
</script>
