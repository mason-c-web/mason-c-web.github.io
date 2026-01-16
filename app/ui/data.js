import { About, Blog, Content } from "./pages";

const data = {
  userData: [
    {
      title: "About",
      descriptionHTML: About(),
      image: "images/profile.png",
      titleImage: "images/hello.gif",
      titleImage2:
        "https://blob.gifcities.org/gifcities/VBX3WPIF3XPHZIO4REYIZHZINHA7MHMB.gif",
    },

    {
      title: "Blog",
      descriptionHTML: Blog(),
      image:
        "https://blob.gifcities.org/gifcities/CTOATOVETCCU6ZF6G627QBBEKY5CJA5B.gif",
      titleImage: "images/blog.gif",
      titleImage2:
        "https://blob.gifcities.org/gifcities/4NLLNNVMSTBSRHPMCSX5E33SXAVC46BK.gif",
    },

    {
      title: "Content Creation",
      descriptionHTML: Content(),
      image:
        "https://blob.gifcities.org/gifcities/HPQGPOTYZCY5BYHFDTIBR4KYASMI73XM.gif",
      titleImage: "images/content.gif",
      titleImage2:
        "https://blob.gifcities.org/gifcities/VEBI432J34B3VKRLQ5VNCRNZQNBPBNKE.gif",
    },
  ],

  maxNumberOfPages: 5,
  websiteTitle: "Clare Mason",
};

export default data;
