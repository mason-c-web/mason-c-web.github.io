import { ReactNode } from "react";
import { About, Blog, Content } from "./pages";

export type PageData ={
    image: string;
    imageAltText: string
    titleImage: string;
    titleImageAltText: string;
    titleDecorator: string;
    titleDecoratorAltText: string;
    descriptionHTML: ReactNode ;
}

const pageData = {
  pages: [
    {
      descriptionHTML: About(),
      image: "images/profile.png",
      imageAltText:"blonde women wearing a white sweater and floral skirt",
      titleImage: "images/hello.gif",
      titleImageAltText:" 'Hi, I'm Clare' in sparkling pink letters",
      titleDecorator:
        "https://blob.gifcities.org/gifcities/VBX3WPIF3XPHZIO4REYIZHZINHA7MHMB.gif",
        titleDecoratorAltText:"calico cat with a tail waving back and forth"
    },
     

    {
      descriptionHTML: Blog(),
      image:
        "https://blob.gifcities.org/gifcities/CTOATOVETCCU6ZF6G627QBBEKY5CJA5B.gif",
        imageAltText:"Small white dog sitting at a 90's computer monitor and keyboard. His tail waves back and forth.",
      titleImage: "images/blog.gif",
      titleImageAltText:"'Blog' in sparkling pink letters",
      titleDecorator:
        "https://blob.gifcities.org/gifcities/4NLLNNVMSTBSRHPMCSX5E33SXAVC46BK.gif",
        titleDecoratorAltText:"typewriting typing back and forth"
    },

    {
      descriptionHTML: Content(),
      image:
        "https://blob.gifcities.org/gifcities/HPQGPOTYZCY5BYHFDTIBR4KYASMI73XM.gif",
        imageAltText:"low resolution 3d render of a nikon camera rotating 360 degrees",
      titleImage: "images/content.gif",
            titleImageAltText:"'Content Creation' in sparkling pink letters",
      titleDecorator:
        "https://blob.gifcities.org/gifcities/VEBI432J34B3VKRLQ5VNCRNZQNBPBNKE.gif",
         titleDecoratorAltText:"pixel art dslr camera flashing"
    },
  ],
};

export  default pageData;

