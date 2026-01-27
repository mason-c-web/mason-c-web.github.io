import { PageData } from "./pageData";

export function PageContent(props: { pageData: PageData }) {
  const { image, titleImage, titleDecorator, descriptionHTML } = props.pageData;
  return (
    <div className="main-box">
      <div className={"hero-content flex-col lg:flex-row "}>
        <img src={image} className="object-contain md:object-cover" />

        <div>
          <div className="lg:flex lg:flex-row items-end max-w-sm ">
            <img src={titleImage} />
            <img src={titleDecorator} />
          </div>

          {descriptionHTML}
        </div>
      </div>
    </div>
  );
}
