var buff = Buffer.from("Dans ce text il y a des éléments et des lettres en français", "utf8");

console.log(buff);
console.log(buff.toString());

buff.write("Lorem ipsum");
console.log(buff.toString());
