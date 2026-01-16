import data from "./data";

export function PageContent(props: { index: number }) {
  const page = data.userData[props.index];
  return (
    <div className={"hero-content flex-col lg:flex-row "}>
      <img src={page.image} className="max-w-sm  " />

      <div>
        <div className="flex flex-row items-end ">
          <img src={page.titleImage} />
          <img src={page.titleImage2} />
        </div>

        {page.descriptionHTML}
      </div>
    </div>
  );
}
