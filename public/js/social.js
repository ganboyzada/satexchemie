$("#social-overlay").czmChatSupport({
  /* Button Settings */
  button: {
    position:
      "right" /* left, right or false. "position:false" does not pin to the left or right */,
    style: 1 /* Button style. Number between 1 and 7 */,
    src: '<img alt="" src="/images/chat.svg" style="height: 65%; width: 65%; object-fit: contain; background: none; border-radius: 0;">' /* Image, Icon or SVG */,
    backgroundColor: "#22b573" /* Html color code */,
    effect: 3 /* Button effect. Number between 1 and 7 */,
    notificationNumber:
      "1" /* Custom text or false. To remove, (notificationNumber:false) */,
    speechBubble: false/*chatbox.help*/ /* To remove, (speechBubble:false) */,
    pulseEffect: true /* To remove, (pulseEffect:false) */,
    text: {
      /* For Button style larger than 1 */
      title: chatbox.header /* Writing is required */,
      description: chatbox.text /* To remove, (description:false) */,
      online: chatbox.online /* To remove, (online:false) */,
      offline: chatbox.offline /* To remove, (offline:false) */,
    },
  },

  /* Popup Settings */
  popup: {
    automaticOpen: false /* true or false (Open popup automatically when the page is loaded) */,
    outsideClickClosePopup: true /* true or false (Clicking anywhere on the page will close the popup) */,
    effect: 1 /* Popup opening effect. Number between 1 and 15 */,
    header: {
      backgroundColor: "#212121" /* Html color code */,
      title: chatbox.header /* Writing is required */,
      description: chatbox.text /* To remove, (description:false) */,
    },

    /* Representative Settings */
    persons: [
      /* Copy for more representatives [::Start Copy::] */
      {
        avatar: {
          src: '<i class="fa fa-whatsapp"></i>' /* Image, Icon or SVG */,
          backgroundColor: "#10c379" /* Html color code */,
          onlineCircle: true /* Avatar online circle. To remove, (onlineCircle:false) */,
        },
        text: {
          title: "Whatsapp" /* Writing is required */,
          description:
            chatbox.customer_support /* To remove, (description:false) */,
          online: chatbox.online /* To remove, (online:false) */,
          offline: chatbox.offline /* To remove, (offline:false) */,
        },
        link: {
          desktop:
            "https://web.whatsapp.com/send?phone=994505553300&text=" +
            chatbox.hi /* Writing is required */,
          mobile:
            "https://wa.me/994505553300/?text=" +
            chatbox.hi /* If it is hidden desktop link will be valid. To remove, (mobile:false) */,
        },
        onlineDay: {
          /* Change the day you are offline like this. (sunday:false) */
          sunday: "00:00-23:59",
          monday: "00:00-23:59",
          tuesday: "00:00-23:59",
          wednesday: "00:00-23:59",
          thursday: "00:00-23:59",
          friday: "00:00-23:59",
          saturday: "00:00-23:59",
        },
      },
      /* [::End Copy::] */

      
    ],
  },

  /* Other Settings */
  sound: false /* true (default sound), false or custom sound. Custom sound example, (sound:'assets/sound/notification.mp3') */,
  changeBrowserTitle: false /* Custom text or false. To remove, (changeBrowserTitle:false) */,
  cookie: false /* It does not show the speech bubble, notification number, and pulse effect again for the specified time. For example, do not show for 1 hour, (cookie:1) or to remove, (cookie:false) */,
});
