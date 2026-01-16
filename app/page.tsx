"use client";
import { PageContent } from "./ui/PageContent";
import { VisitorCounter } from "./ui/VisitorCounter";

export default function Home() {
  return (
    <main>
      <hr />
      <div className="hero  min-h-screen flex flex-col">
        <div className="main-box">
          <PageContent index={0} />
        </div>
        <div className="main-box">
          <PageContent index={1} />
        </div>
        <div className="main-box">
          <PageContent index={2} />
        </div>

        <VisitorCounter />
      </div>
    </main>
  );
}
