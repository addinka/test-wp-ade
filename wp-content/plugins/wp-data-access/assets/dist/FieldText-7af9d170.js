import{r as o,j as u}from"./main.js";import{F as d}from"./MetaData-476729d9.js";import{M as f}from"./FormContainer-3523f7ab.js";import"./Typography-c1919a6b.js";import"./DockRight-70b6fcac.js";import"./IconButton-18a73260.js";import"./Actions-9a089581.js";const b=({columnName:e,columnValue:t,primaryKey:a,columnMetaData:r,formMode:m,onColumnChange:p})=>{const[x,s]=o.useState(t);o.useEffect(()=>{s(t)},[t,a]);const l={maxLength:r.character_maximum_length,readOnly:m!==d.EDIT},n="Enter a text ("+r.character_maximum_length+")";return u.jsx(f,{id:e,label:r.formLabel,value:x,required:r.is_nullable==="NO",inputProps:l,helperText:n,onChange:i=>{s(i.target.value),p(e,i.target.value)}})};export{b as default};
