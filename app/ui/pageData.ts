import { ReactNode } from "react";
import { About, Blog, Content } from "./pages";

export type PageData ={
    titleImage: string;
    titleDecorator: string;
    image: string;
    descriptionHTML: ReactNode ;
}

const pageData = {
  pages: [
    {
      descriptionHTML: About(),
      image: "images/profile.png",
      titleImage: "images/hello.gif",
      titleDecorator:
        "https://blob.gifcities.org/gifcities/VBX3WPIF3XPHZIO4REYIZHZINHA7MHMB.gif",
    },

    {
      descriptionHTML: Blog(),
      image:
        "https://blob.gifcities.org/gifcities/CTOATOVETCCU6ZF6G627QBBEKY5CJA5B.gif",
      titleImage: "images/blog.gif",
      titleDecorator:
        "https://blob.gifcities.org/gifcities/4NLLNNVMSTBSRHPMCSX5E33SXAVC46BK.gif",
    },

    {
      descriptionHTML: Content(),
      image:
        "https://blob.gifcities.org/gifcities/HPQGPOTYZCY5BYHFDTIBR4KYASMI73XM.gif",
      titleImage: "images/content.gif",
      titleDecorator:
        "https://blob.gifcities.org/gifcities/VEBI432J34B3VKRLQ5VNCRNZQNBPBNKE.gif",
    },
  ],
};

export  default pageData;

