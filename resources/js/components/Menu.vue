<template>
  <div id="menu">
    <div class="headpage">
      <div class="chiem-toan-bo" style="float: right; width: 90%">
        <img
          class="chiem-toan-bo"
          width="60%"
          src="./assets/headweb.jpg"
          alt="headweb"
        />
      </div>
      <div class="benphai">
        <img
          width="100%"
          height="90%"
          src="./assets/logoweb.jpg"
          alt="logoweb"
        />
        <br />
        <p margin-top="0px">teeth care</p>
      </div>
    </div>

    <div v-for="(formDK, index) in formDKs" :key="index">
      <input type="text" v-model="formDK.content" />
      <br />
      <br />
    </div>

    <button @click="addInfor()">Đăng kí</button>
  </div>
</template>

<script>
export default {
  name: "App",

  data() {
    return {
      formDKs: [
        { content: "Họ tên" },
        { content: "Tuổi" },
        { content: "Địa chỉ" },
        { content: "Số điện thoại" },
        { content: "Ngày tháng năm sinh" },
        { content: "Giới Tính" },
      ],
      userBN: {
        name: "",
        age: "",
        add: "",
        phone: "",
        date: "",
        sex: "",
      },

      isShow: false,
      inputDisabled: true,
      id: "fitness",
      watch: {
        formDKs: function () {
          console.log('new value changed');
        },
      },
    };
  },
  methods: {
    addInfor: function () {
      (this.userBN.name = this.formDKs[0].content),
        (this.userBN.age = this.formDKs[1].content),
        (this.userBN.add = this.formDKs[2].content),
        (this.userBN.phone = this.formDKs[3].content),
        (this.userBN.date = this.formDKs[4].content),
        (this.userBN.sex = this.formDKs[5].content);
    },
  },
};
</script>

<style>
#menu {
  text-align: center;
  color: #2c3e50;
  margin-top: 30px;
}
.headpage {
  text-align: center;
  width: 100%;
  height: 150px;
}
.chiem-toan-bo {
  width: 100%;
  height: 100%;
}
.benphai {
  width: 10%;
  float: left;
  height: 150px;
}
</style>
