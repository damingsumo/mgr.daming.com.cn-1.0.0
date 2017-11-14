<?php
/* Smarty version 3.1.31, created on 2017-11-14 11:35:44
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\brand\size.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a0a6490b946d2_31226573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6ac337c66f7309eba970f6ed08888de2c65009e' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\brand\\size.tpl',
      1 => 1510630540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_5a0a6490b946d2_31226573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'品牌上装尺码对照'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'brand'), 0, false);
?>
 
			<div class="goods">
		    <div class="top_header">
			      <ul class="top">
					<li style="line-height:34px;"> 品牌详情</li>
					<a href="/brand/brandSizeAdd"><li style="line-height:34px;"> 上装品牌对照表</li></a>
					<a href="/brand/brandNumSizeAdd"><li style="line-height:34px;"> 下装品牌对照表</li></a>
				</ul>
	        </div>
		     <form id="brandForm" action="/brand/brandsizeadd" method="post"  onsubmit="return check()">
		     <input type="hidden" name="brand_id" value="<?php echo $_smarty_tpl->tpl_vars['brandId']->value;?>
">
		     	<div class="size_form"> 
		     		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brandSizes']->value, 'brandSize', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['brandSize']->value) {
?>
		     		<div class="size_form_list">
		     			 <ul class="size_form_list1">
			     		 	<li>
			     		 		<label>身高/体重</label> 
			     		 		<select name="height[]">
			     		 			<option value="0">请选择</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 146) {?> selected <?php }?> value="146">146</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 147) {?> selected <?php }?> value="147">147</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 148) {?> selected <?php }?> value="148">148</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 149) {?> selected <?php }?> value="149">149</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 150) {?> selected <?php }?> value="150">150</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 151) {?> selected <?php }?> value="151">151</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 152) {?> selected <?php }?> value="152">152</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 153) {?> selected <?php }?> value="153">153</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 154) {?> selected <?php }?> value="154">154</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 155) {?> selected <?php }?> value="155">155</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 156) {?> selected <?php }?> value="156">156</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 157) {?> selected <?php }?> value="157">157</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 158) {?> selected <?php }?> value="158">158</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 159) {?> selected <?php }?> value="159">159</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 160) {?> selected <?php }?> value="160">160</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 161) {?> selected <?php }?> value="161">161</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 162) {?> selected <?php }?> value="162">162</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 163) {?> selected <?php }?> value="163">163</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 164) {?> selected <?php }?> value="164">164</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 165) {?> selected <?php }?> value="165">165</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 166) {?> selected <?php }?> value="166">166</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 167) {?> selected <?php }?> value="167">167</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 168) {?> selected <?php }?> value="168">168</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 169) {?> selected <?php }?> value="169">169</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 170) {?> selected <?php }?> value="170">170</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 171) {?> selected <?php }?> value="171">171</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 172) {?> selected <?php }?> value="172">172</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 173) {?> selected <?php }?> value="173">173</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 174) {?> selected <?php }?> value="174">174</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 175) {?> selected <?php }?> value="175">175</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 176) {?> selected <?php }?> value="176">176</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 177) {?> selected <?php }?> value="177">177</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 178) {?> selected <?php }?> value="178">178</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 179) {?> selected <?php }?> value="179">179</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 180) {?> selected <?php }?> value="180">180</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 181) {?> selected <?php }?> value="181">181</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['height'] == 182) {?> selected <?php }?> value="182">182</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>&nbsp/&nbsp</span>
			     		 		<select name="weight[]">
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 0) {?> selected <?php }?> value="0">请选择</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 34) {?> selected <?php }?> value="34">34</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 35) {?> selected <?php }?> value="35">35</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 36) {?> selected <?php }?> value="36">36</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 37) {?> selected <?php }?> value="37">37</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 38) {?> selected <?php }?> value="38">38</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 39) {?> selected <?php }?> value="39">39</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 40) {?> selected <?php }?> value="40">40</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 41) {?> selected <?php }?> value="41">41</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 42) {?> selected <?php }?> value="42">42</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 43) {?> selected <?php }?> value="43">43</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 44) {?> selected <?php }?> value="44">44</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 45) {?> selected <?php }?> value="45">45</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 46) {?> selected <?php }?> value="46">46</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 47) {?> selected <?php }?> value="47">47</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 48) {?> selected <?php }?> value="48">48</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 49) {?> selected <?php }?> value="49">49</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 50) {?> selected <?php }?> value="50">50</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 51) {?> selected <?php }?> value="51">51</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 52) {?> selected <?php }?> value="52">52</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 53) {?> selected <?php }?> value="53">53</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 54) {?> selected <?php }?> value="54">54</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 55) {?> selected <?php }?> value="55">55</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 56) {?> selected <?php }?> value="56">56</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 57) {?> selected <?php }?> value="57">57</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 58) {?> selected <?php }?> value="58">58</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 59) {?> selected <?php }?> value="59">59</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 60) {?> selected <?php }?> value="60">60</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 61) {?> selected <?php }?> value="61">61</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 62) {?> selected <?php }?> value="62">62</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 63) {?> selected <?php }?> value="63">63</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 64) {?> selected <?php }?> value="64">64</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 65) {?> selected <?php }?> value="65">65</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 66) {?> selected <?php }?> value="66">66</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 67) {?> selected <?php }?> value="67">67</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 68) {?> selected <?php }?> value="68">68</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 69) {?> selected <?php }?> value="69">69</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 70) {?> selected <?php }?> value="70">70</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 71) {?> selected <?php }?> value="71">71</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 72) {?> selected <?php }?> value="72">72</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 73) {?> selected <?php }?> value="73">73</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 74) {?> selected <?php }?> value="74">74</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 75) {?> selected <?php }?> value="75">75</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 76) {?> selected <?php }?> value="76">76</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 77) {?> selected <?php }?> value="77">77</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 78) {?> selected <?php }?> value="78">78</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 79) {?> selected <?php }?> value="79">79</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 80) {?> selected <?php }?> value="80">80</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 81) {?> selected <?php }?> value="81">81</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 82) {?> selected <?php }?> value="82">82</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 83) {?> selected <?php }?> value="83">83</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 84) {?> selected <?php }?> value="84">84</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 85) {?> selected <?php }?> value="85">85</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 86) {?> selected <?php }?> value="86">86</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 87) {?> selected <?php }?> value="87">87</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['weight'] == 88) {?> selected <?php }?> value="88">88</option>
			     		 		</select>
			     		 		<em> kg </em>
			     		 	</li>
			     		 	<li>
			     		 		<label>上装尺码：</label>
			     		 		<select name="size[]">
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['size'] == 0) {?> selected <?php }?> value="0">请选择</option>
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['size'] == 1) {?> selected <?php }?> value="1">S</option>
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['size'] == 2) {?> selected <?php }?> value="2">M</option>
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['size'] == 3) {?> selected <?php }?> value="3">L</option>
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['size'] == 4) {?> selected <?php }?> value="4">XL</option>
			     		 		</select>
			     		 	</li>
			     		 	<li>
			     		 		<label>胸围:</label>
			     		 		<select name="start_bust[]">
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 0) {?> selected <?php }?> value="0">请选择</option>
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 65) {?> selected <?php }?> value="65">65</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 66) {?> selected <?php }?> value="66">66</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 67) {?> selected <?php }?> value="67">67</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 68) {?> selected <?php }?> value="68">68</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 69) {?> selected <?php }?> value="69">69</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 70) {?> selected <?php }?> value="70">70</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 71) {?> selected <?php }?> value="71">71</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 72) {?> selected <?php }?> value="72">72</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 73) {?> selected <?php }?> value="73">73</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 74) {?> selected <?php }?> value="74">74</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 75) {?> selected <?php }?> value="75">75</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 76) {?> selected <?php }?> value="76">76</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 77) {?> selected <?php }?> value="77">77</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 78) {?> selected <?php }?> value="78">78</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 79) {?> selected <?php }?> value="79">79</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 80) {?> selected <?php }?> value="80">80</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 81) {?> selected <?php }?> value="81">81</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 82) {?> selected <?php }?> value="82">82</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 83) {?> selected <?php }?> value="83">83</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 84) {?> selected <?php }?> value="84">84</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 85) {?> selected <?php }?> value="85">85</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 86) {?> selected <?php }?> value="86">86</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 87) {?> selected <?php }?> value="87">87</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 88) {?> selected <?php }?> value="88">88</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 89) {?> selected <?php }?> value="89">89</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 90) {?> selected <?php }?> value="90">90</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 91) {?> selected <?php }?> value="91">91</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 92) {?> selected <?php }?> value="92">92</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 93) {?> selected <?php }?> value="93">93</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 94) {?> selected <?php }?> value="94">94</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 95) {?> selected <?php }?> value="95">95</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 96) {?> selected <?php }?> value="96">96</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 97) {?> selected <?php }?> value="97">97</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 98) {?> selected <?php }?> value="98">98</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 99) {?> selected <?php }?> value="99">99</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 100) {?> selected <?php }?> value="100">100</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 101) {?> selected <?php }?> value="101">101</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 102) {?> selected <?php }?> value="102">102</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 103) {?> selected <?php }?> value="103">103</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 104) {?> selected <?php }?> value="104">104</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 105) {?> selected <?php }?> value="105">105</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 106) {?> selected <?php }?> value="106">106</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 107) {?> selected <?php }?> value="107">107</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 108) {?> selected <?php }?> value="108">108</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 109) {?> selected <?php }?> value="109">109</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 110) {?> selected <?php }?> value="110">110</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 111) {?> selected <?php }?> value="111">111</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 112) {?> selected <?php }?> value="112">112</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 113) {?> selected <?php }?> value="113">113</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 114) {?> selected <?php }?> value="114">114</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_bust'] == 115) {?> selected <?php }?> value="115">115</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_bust[]">
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 0) {?> selected <?php }?> value="0">请选择</option>
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 65) {?> selected <?php }?> value="65">65</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 66) {?> selected <?php }?> value="66">66</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 67) {?> selected <?php }?> value="67">67</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 68) {?> selected <?php }?> value="68">68</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 69) {?> selected <?php }?> value="69">69</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 70) {?> selected <?php }?> value="70">70</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 71) {?> selected <?php }?> value="71">71</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 72) {?> selected <?php }?> value="72">72</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 73) {?> selected <?php }?> value="73">73</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 74) {?> selected <?php }?> value="74">74</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 75) {?> selected <?php }?> value="75">75</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 76) {?> selected <?php }?> value="76">76</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 77) {?> selected <?php }?> value="77">77</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 78) {?> selected <?php }?> value="78">78</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 79) {?> selected <?php }?> value="79">79</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 80) {?> selected <?php }?> value="80">80</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 81) {?> selected <?php }?> value="81">81</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 82) {?> selected <?php }?> value="82">82</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 83) {?> selected <?php }?> value="83">83</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 84) {?> selected <?php }?> value="84">84</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 85) {?> selected <?php }?> value="85">85</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 86) {?> selected <?php }?> value="86">86</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 87) {?> selected <?php }?> value="87">87</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 88) {?> selected <?php }?> value="88">88</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 89) {?> selected <?php }?> value="89">89</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 90) {?> selected <?php }?> value="90">90</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 91) {?> selected <?php }?> value="91">91</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 92) {?> selected <?php }?> value="92">92</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 93) {?> selected <?php }?> value="93">93</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 94) {?> selected <?php }?> value="94">94</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 95) {?> selected <?php }?> value="95">95</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 96) {?> selected <?php }?> value="96">96</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 97) {?> selected <?php }?> value="97">97</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 98) {?> selected <?php }?> value="98">98</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 99) {?> selected <?php }?> value="99">99</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 100) {?> selected <?php }?> value="100">100</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 101) {?> selected <?php }?> value="101">101</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 102) {?> selected <?php }?> value="102">102</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 103) {?> selected <?php }?> value="103">103</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 104) {?> selected <?php }?> value="104">104</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 105) {?> selected <?php }?> value="105">105</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 106) {?> selected <?php }?> value="106">106</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 107) {?> selected <?php }?> value="107">107</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 108) {?> selected <?php }?> value="108">108</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 109) {?> selected <?php }?> value="109">109</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 111) {?> selected <?php }?> value="111">111</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 112) {?> selected <?php }?> value="112">112</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 113) {?> selected <?php }?> value="113">113</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 114) {?> selected <?php }?> value="114">114</option>
					                <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_bust'] == 115) {?> selected <?php }?> value="115">115</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li>
			     		    <li>
			     		 		<label>腰围：</label>
			     		 		<select name="start_kummerbund[]">
			     		 			  <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 0) {?> selected <?php }?> value="0">请选择</option>
			     		 			  <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 44) {?> selected <?php }?> value="44">44</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 45) {?> selected <?php }?> value="45">45</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 46) {?> selected <?php }?> value="46">46</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 47) {?> selected <?php }?> value="47">47</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 48) {?> selected <?php }?> value="48">48</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 49) {?> selected <?php }?> value="49">49</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 50) {?> selected <?php }?> value="50">50</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 51) {?> selected <?php }?> value="51">50</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 52) {?> selected <?php }?> value="52">52</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 53) {?> selected <?php }?> value="53">53</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 54) {?> selected <?php }?> value="54">54</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 55) {?> selected <?php }?> value="55">55</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 56) {?> selected <?php }?> value="56">56</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 57) {?> selected <?php }?> value="57">57</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 58) {?> selected <?php }?> value="58">58</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 59) {?> selected <?php }?> value="59">59</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 60) {?> selected <?php }?> value="60">60</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 61) {?> selected <?php }?> value="61">61</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 62) {?> selected <?php }?> value="62">62</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 63) {?> selected <?php }?> value="63">63</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 64) {?> selected <?php }?> value="64">64</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 65) {?> selected <?php }?> value="65">65</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 66) {?> selected <?php }?> value="66">66</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 67) {?> selected <?php }?> value="67">67</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 68) {?> selected <?php }?> value="68">68</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 69) {?> selected <?php }?> value="69">69</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 70) {?> selected <?php }?> value="70">70</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 71) {?> selected <?php }?> value="71">71</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 72) {?> selected <?php }?> value="72">72</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 73) {?> selected <?php }?> value="73">73</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 74) {?> selected <?php }?> value="74">74</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 75) {?> selected <?php }?> value="75">75</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 76) {?> selected <?php }?> value="76">76</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 77) {?> selected <?php }?> value="77">77</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 78) {?> selected <?php }?> value="78">78</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 79) {?> selected <?php }?> value="79">79</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 80) {?> selected <?php }?> value="80">80</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 81) {?> selected <?php }?> value="81">81</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 82) {?> selected <?php }?> value="82">82</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 83) {?> selected <?php }?> value="83">83</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 84) {?> selected <?php }?> value="84">84</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 85) {?> selected <?php }?> value="85">85</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 86) {?> selected <?php }?> value="86">86</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 87) {?> selected <?php }?> value="87">87</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 88) {?> selected <?php }?> value="88">88</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 89) {?> selected <?php }?> value="89">89</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 90) {?> selected <?php }?> value="90">90</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 91) {?> selected <?php }?> value="91">91</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 92) {?> selected <?php }?> value="92">92</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 93) {?> selected <?php }?> value="93">93</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 94) {?> selected <?php }?> value="94">94</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 95) {?> selected <?php }?> value="95">95</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 96) {?> selected <?php }?> value="96">96</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 97) {?> selected <?php }?> value="97">97</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 98) {?> selected <?php }?> value="98">98</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 99) {?> selected <?php }?> value="99">99</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 100) {?> selected <?php }?> value="100">100</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 101) {?> selected <?php }?> value="101">101</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 102) {?> selected <?php }?> value="102">102</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 103) {?> selected <?php }?> value="103">103</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 104) {?> selected <?php }?> value="104">104</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 105) {?> selected <?php }?> value="105">105</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 106) {?> selected <?php }?> value="106">106</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_kummerbund'] == 107) {?> selected <?php }?> value="107">107</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_kummerbund[]">
			     		 			  <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 0) {?> selected <?php }?> value="0">请选择</option>
			     		 			  <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 44) {?> selected <?php }?> value="44">44</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 45) {?> selected <?php }?> value="45">45</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 46) {?> selected <?php }?> value="46">46</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 47) {?> selected <?php }?> value="47">47</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 48) {?> selected <?php }?> value="48">48</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 49) {?> selected <?php }?> value="49">49</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 50) {?> selected <?php }?> value="50">50</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 51) {?> selected <?php }?> value="51">50</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 52) {?> selected <?php }?> value="52">52</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 53) {?> selected <?php }?> value="53">53</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 54) {?> selected <?php }?> value="54">54</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 55) {?> selected <?php }?> value="55">55</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 56) {?> selected <?php }?> value="56">56</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 57) {?> selected <?php }?> value="57">57</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 58) {?> selected <?php }?> value="58">58</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 59) {?> selected <?php }?> value="59">59</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 60) {?> selected <?php }?> value="60">60</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 61) {?> selected <?php }?> value="61">61</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 62) {?> selected <?php }?> value="62">62</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 63) {?> selected <?php }?> value="63">63</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 64) {?> selected <?php }?> value="64">64</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 65) {?> selected <?php }?> value="65">65</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 66) {?> selected <?php }?> value="66">66</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 67) {?> selected <?php }?> value="67">67</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 68) {?> selected <?php }?> value="68">68</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 69) {?> selected <?php }?> value="69">69</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 70) {?> selected <?php }?> value="70">70</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 71) {?> selected <?php }?> value="71">71</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 72) {?> selected <?php }?> value="72">72</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 73) {?> selected <?php }?> value="73">73</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 74) {?> selected <?php }?> value="74">74</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 75) {?> selected <?php }?> value="75">75</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 76) {?> selected <?php }?> value="76">76</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 77) {?> selected <?php }?> value="77">77</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 78) {?> selected <?php }?> value="78">78</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 79) {?> selected <?php }?> value="79">79</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 80) {?> selected <?php }?> value="80">80</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 81) {?> selected <?php }?> value="81">81</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 82) {?> selected <?php }?> value="82">82</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 83) {?> selected <?php }?> value="83">83</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 84) {?> selected <?php }?> value="84">84</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 85) {?> selected <?php }?> value="85">85</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 86) {?> selected <?php }?> value="86">86</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 87) {?> selected <?php }?> value="87">87</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 88) {?> selected <?php }?> value="88">88</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 89) {?> selected <?php }?> value="89">89</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 90) {?> selected <?php }?> value="90">90</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 91) {?> selected <?php }?> value="91">91</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 92) {?> selected <?php }?> value="92">92</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 93) {?> selected <?php }?> value="93">93</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 94) {?> selected <?php }?> value="94">94</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 95) {?> selected <?php }?> value="95">95</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 96) {?> selected <?php }?> value="96">96</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 97) {?> selected <?php }?> value="97">97</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 98) {?> selected <?php }?> value="98">98</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 99) {?> selected <?php }?> value="99">99</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 100) {?> selected <?php }?> value="100">100</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 101) {?> selected <?php }?> value="101">101</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 102) {?> selected <?php }?> value="102">102</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 103) {?> selected <?php }?> value="103">103</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 104) {?> selected <?php }?> value="104">104</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 105) {?> selected <?php }?> value="105">105</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 106) {?> selected <?php }?> value="106">106</option>
						              <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_kummerbund'] == 107) {?> selected <?php }?> value="107">107</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li>
			     		 	<li>
			     		 		<label>身高：</label>
			     		 		<select name="start_height[]">
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 0) {?> selected <?php }?> value="0">请选择</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 146) {?> selected <?php }?> value="146">146</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 147) {?> selected <?php }?> value="147">147</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 148) {?> selected <?php }?> value="148">148</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 149) {?> selected <?php }?> value="149">149</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 150) {?> selected <?php }?> value="150">150</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 151) {?> selected <?php }?> value="151">151</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 152) {?> selected <?php }?> value="152">152</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 153) {?> selected <?php }?> value="153">153</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 154) {?> selected <?php }?> value="154">154</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 155) {?> selected <?php }?> value="155">155</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 156) {?> selected <?php }?> value="156">156</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 157) {?> selected <?php }?> value="157">157</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 158) {?> selected <?php }?> value="158">158</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 159) {?> selected <?php }?> value="159">159</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 160) {?> selected <?php }?> value="160">160</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 161) {?> selected <?php }?> value="161">161</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 162) {?> selected <?php }?> value="162">162</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 163) {?> selected <?php }?> value="163">163</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 164) {?> selected <?php }?> value="164">164</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 165) {?> selected <?php }?> value="165">165</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 166) {?> selected <?php }?> value="166">166</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 167) {?> selected <?php }?> value="167">167</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 168) {?> selected <?php }?> value="168">168</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 169) {?> selected <?php }?> value="169">169</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 170) {?> selected <?php }?> value="170">170</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 171) {?> selected <?php }?> value="171">171</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 172) {?> selected <?php }?> value="172">172</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 173) {?> selected <?php }?> value="173">173</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 174) {?> selected <?php }?> value="174">174</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 175) {?> selected <?php }?> value="175">175</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 176) {?> selected <?php }?> value="176">176</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 177) {?> selected <?php }?> value="177">177</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 178) {?> selected <?php }?> value="178">178</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 179) {?> selected <?php }?> value="179">179</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 180) {?> selected <?php }?> value="180">180</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 181) {?> selected <?php }?> value="181">181</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_height'] == 182) {?> selected <?php }?> value="182">182</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_height[]">
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 0) {?> selected <?php }?> value="0">请选择</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 146) {?> selected <?php }?> value="146">146</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 147) {?> selected <?php }?> value="147">147</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 148) {?> selected <?php }?> value="148">148</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 149) {?> selected <?php }?> value="149">149</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 150) {?> selected <?php }?> value="150">150</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 151) {?> selected <?php }?> value="151">151</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 152) {?> selected <?php }?> value="152">152</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 153) {?> selected <?php }?> value="153">153</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 154) {?> selected <?php }?> value="154">154</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 155) {?> selected <?php }?> value="155">155</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 156) {?> selected <?php }?> value="156">156</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 157) {?> selected <?php }?> value="157">157</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 158) {?> selected <?php }?> value="158">158</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 159) {?> selected <?php }?> value="159">159</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 160) {?> selected <?php }?> value="160">160</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 161) {?> selected <?php }?> value="161">161</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 162) {?> selected <?php }?> value="162">162</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 163) {?> selected <?php }?> value="163">163</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 164) {?> selected <?php }?> value="164">164</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 165) {?> selected <?php }?> value="165">165</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 166) {?> selected <?php }?> value="166">166</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 167) {?> selected <?php }?> value="167">167</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 168) {?> selected <?php }?> value="168">168</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 169) {?> selected <?php }?> value="169">169</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 170) {?> selected <?php }?> value="170">170</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 171) {?> selected <?php }?> value="171">171</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 172) {?> selected <?php }?> value="172">172</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 173) {?> selected <?php }?> value="173">173</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 174) {?> selected <?php }?> value="174">174</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 175) {?> selected <?php }?> value="175">175</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 176) {?> selected <?php }?> value="176">176</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 177) {?> selected <?php }?> value="177">177</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 178) {?> selected <?php }?> value="178">178</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 179) {?> selected <?php }?> value="179">179</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 180) {?> selected <?php }?> value="180">180</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 181) {?> selected <?php }?> value="181">181</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_height'] == 182) {?> selected <?php }?> value="182">182</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li>
			     		 	<li>
			     		 		<label>体重：</label>
			     		 		<select name="start_weight[]">
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 0) {?> selected <?php }?> value="0">请选择</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 34) {?> selected <?php }?> value="34">34</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 35) {?> selected <?php }?> value="35">35</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 36) {?> selected <?php }?> value="36">36</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 37) {?> selected <?php }?> value="37">37</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 38) {?> selected <?php }?> value="38">38</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 39) {?> selected <?php }?> value="39">39</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 40) {?> selected <?php }?> value="40">40</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 41) {?> selected <?php }?> value="41">41</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 42) {?> selected <?php }?> value="42">42</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 43) {?> selected <?php }?> value="43">43</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 44) {?> selected <?php }?> value="44">44</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 45) {?> selected <?php }?> value="45">45</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 46) {?> selected <?php }?> value="46">46</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 47) {?> selected <?php }?> value="47">47</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 48) {?> selected <?php }?> value="48">48</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 49) {?> selected <?php }?> value="49">49</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 50) {?> selected <?php }?> value="50">50</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 51) {?> selected <?php }?> value="51">51</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 52) {?> selected <?php }?> value="52">52</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 53) {?> selected <?php }?> value="53">53</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 54) {?> selected <?php }?> value="54">54</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 55) {?> selected <?php }?> value="55">55</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 56) {?> selected <?php }?> value="56">56</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 57) {?> selected <?php }?> value="57">57</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 58) {?> selected <?php }?> value="58">58</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 59) {?> selected <?php }?> value="59">59</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 60) {?> selected <?php }?> value="60">60</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 61) {?> selected <?php }?> value="61">61</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 62) {?> selected <?php }?> value="62">62</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 63) {?> selected <?php }?> value="63">63</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 64) {?> selected <?php }?> value="64">64</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 65) {?> selected <?php }?> value="65">65</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 66) {?> selected <?php }?> value="66">66</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 67) {?> selected <?php }?> value="67">67</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 68) {?> selected <?php }?> value="68">68</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 69) {?> selected <?php }?> value="69">69</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 70) {?> selected <?php }?> value="70">70</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 71) {?> selected <?php }?> value="71">71</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 72) {?> selected <?php }?> value="72">72</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 73) {?> selected <?php }?> value="73">73</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 74) {?> selected <?php }?> value="74">74</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 75) {?> selected <?php }?> value="75">75</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 76) {?> selected <?php }?> value="76">76</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 77) {?> selected <?php }?> value="77">77</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 78) {?> selected <?php }?> value="78">78</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 79) {?> selected <?php }?> value="79">79</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 80) {?> selected <?php }?> value="80">80</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 81) {?> selected <?php }?> value="81">81</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 82) {?> selected <?php }?> value="82">82</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 83) {?> selected <?php }?> value="83">83</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 84) {?> selected <?php }?> value="84">84</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 85) {?> selected <?php }?> value="85">85</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 86) {?> selected <?php }?> value="86">86</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 87) {?> selected <?php }?> value="87">87</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_weight'] == 88) {?> selected <?php }?> value="88">88</option>
			     		 		</select>
			     		 		<em> &nbspkg </em>
			     		 		<span>～</span>
			     		 		<select name="end_weight[]">
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 0) {?> selected <?php }?> value="0">请选择</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 34) {?> selected <?php }?> value="34">34</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 35) {?> selected <?php }?> value="35">35</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 36) {?> selected <?php }?> value="36">36</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 37) {?> selected <?php }?> value="37">37</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 38) {?> selected <?php }?> value="38">38</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 39) {?> selected <?php }?> value="39">39</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 40) {?> selected <?php }?> value="40">40</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 41) {?> selected <?php }?> value="41">41</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 42) {?> selected <?php }?> value="42">42</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 43) {?> selected <?php }?> value="43">43</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 44) {?> selected <?php }?> value="44">44</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 45) {?> selected <?php }?> value="45">45</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 46) {?> selected <?php }?> value="46">46</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 47) {?> selected <?php }?> value="47">47</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 48) {?> selected <?php }?> value="48">48</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 49) {?> selected <?php }?> value="49">49</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 50) {?> selected <?php }?> value="50">50</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 51) {?> selected <?php }?> value="51">51</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 52) {?> selected <?php }?> value="52">52</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 53) {?> selected <?php }?> value="53">53</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 54) {?> selected <?php }?> value="54">54</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 55) {?> selected <?php }?> value="55">55</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 56) {?> selected <?php }?> value="56">56</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 57) {?> selected <?php }?> value="57">57</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 58) {?> selected <?php }?> value="58">58</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 59) {?> selected <?php }?> value="59">59</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 60) {?> selected <?php }?> value="60">60</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 61) {?> selected <?php }?> value="61">61</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 62) {?> selected <?php }?> value="62">62</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 63) {?> selected <?php }?> value="63">63</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 64) {?> selected <?php }?> value="64">64</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 65) {?> selected <?php }?> value="65">65</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 66) {?> selected <?php }?> value="66">66</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 67) {?> selected <?php }?> value="67">67</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 68) {?> selected <?php }?> value="68">68</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 69) {?> selected <?php }?> value="69">69</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 70) {?> selected <?php }?> value="70">70</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 71) {?> selected <?php }?> value="71">71</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 72) {?> selected <?php }?> value="72">72</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 73) {?> selected <?php }?> value="73">73</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 74) {?> selected <?php }?> value="74">74</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 75) {?> selected <?php }?> value="75">75</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 76) {?> selected <?php }?> value="76">76</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 77) {?> selected <?php }?> value="77">77</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 78) {?> selected <?php }?> value="78">78</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 79) {?> selected <?php }?> value="79">79</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 80) {?> selected <?php }?> value="80">80</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 81) {?> selected <?php }?> value="81">81</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 82) {?> selected <?php }?> value="82">82</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 83) {?> selected <?php }?> value="83">83</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 84) {?> selected <?php }?> value="84">84</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 85) {?> selected <?php }?> value="85">85</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 86) {?> selected <?php }?> value="86">86</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 87) {?> selected <?php }?> value="87">87</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_weight'] == 88) {?> selected <?php }?> value="88">88</option>
			     		 		</select>
			     		 		<em> kg </em>
			     		 	</li>
			     		 	<li>
			     		 		<label>肩宽：</label>
			     		 		<select name="start_s_width[]">
			     		 			 <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 0) {?> selected <?php }?>value="0">请选择</option>
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 30) {?> selected <?php }?>value="30">30</option>
						            <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 31) {?> selected <?php }?>value="31">31</option>
						            <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 32) {?> selected <?php }?>value="32">32</option>
						            <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 33) {?> selected <?php }?>value="33">33</option>
						            <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 34) {?> selected <?php }?>value="34">34</option>
						            <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 35) {?> selected <?php }?> value="35">35</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 36) {?> selected <?php }?> value="36">36</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 37) {?> selected <?php }?> value="37">37</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 38) {?> selected <?php }?> value="38">38</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 39) {?> selected <?php }?> value="39">39</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 40) {?> selected <?php }?> value="40">40</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 41) {?> selected <?php }?> value="41">41</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 42) {?> selected <?php }?> value="42">42</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 43) {?> selected <?php }?> value="43">43</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 44) {?> selected <?php }?> value="44">44</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 45) {?> selected <?php }?> value="45">45</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 46) {?> selected <?php }?> value="46">46</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_s_width[]">
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 0) {?> selected <?php }?>value="0">请选择</option>
			     		 			<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 30) {?> selected <?php }?>value="30">30</option>
						            <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 31) {?> selected <?php }?>value="31">31</option>
						            <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 32) {?> selected <?php }?>value="32">32</option>
						            <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 33) {?> selected <?php }?>value="33">33</option>
						            <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 34) {?> selected <?php }?>value="34">34</option>
						            <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 35) {?> selected <?php }?> value="35">35</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 36) {?> selected <?php }?> value="36">36</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 37) {?> selected <?php }?> value="37">37</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 38) {?> selected <?php }?> value="38">38</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 39) {?> selected <?php }?> value="39">39</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 40) {?> selected <?php }?> value="40">40</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 41) {?> selected <?php }?> value="41">41</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 42) {?> selected <?php }?> value="42">42</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 43) {?> selected <?php }?> value="43">43</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 44) {?> selected <?php }?> value="44">44</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 45) {?> selected <?php }?> value="45">45</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_s_width'] == 46) {?> selected <?php }?> value="46">46</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li> 
			     		 	<li>
			     		 		<label>衣长：</label>
			     		 		<select name="start_length[]">
			     		 			 <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 0) {?> selected <?php }?> value="0">请选择</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 35) {?> selected <?php }?> value="35">35</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 36) {?> selected <?php }?> value="36">36</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 37) {?> selected <?php }?> value="37">37</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 38) {?> selected <?php }?> value="38">38</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 39) {?> selected <?php }?> value="39">39</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 40) {?> selected <?php }?> value="40">40</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 41) {?> selected <?php }?> value="41">41</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 42) {?> selected <?php }?> value="42">42</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 43) {?> selected <?php }?> value="43">43</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 44) {?> selected <?php }?> value="44">44</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 45) {?> selected <?php }?> value="45">45</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 46) {?> selected <?php }?> value="46">46</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 47) {?> selected <?php }?> value="47">47</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 48) {?> selected <?php }?> value="48">48</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 49) {?> selected <?php }?> value="49">49</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 50) {?> selected <?php }?> value="50">50</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 51) {?> selected <?php }?> value="51">51</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 52) {?> selected <?php }?> value="52">52</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 53) {?> selected <?php }?> value="53">53</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 54) {?> selected <?php }?> value="54">54</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 55) {?> selected <?php }?> value="55">55</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 56) {?> selected <?php }?> value="56">56</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 57) {?> selected <?php }?> value="57">57</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 58) {?> selected <?php }?> value="58">58</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 59) {?> selected <?php }?> value="59">59</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 60) {?> selected <?php }?> value="60">60</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 61) {?> selected <?php }?> value="61">61</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 62) {?> selected <?php }?> value="62">62</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 63) {?> selected <?php }?> value="63">63</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 64) {?> selected <?php }?> value="64">64</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 65) {?> selected <?php }?> value="65">65</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 66) {?> selected <?php }?> value="66">66</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 67) {?> selected <?php }?> value="67">67</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 68) {?> selected <?php }?> value="68">68</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 69) {?> selected <?php }?> value="69">69</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 70) {?> selected <?php }?> value="70">70</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 71) {?> selected <?php }?> value="71">71</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 72) {?> selected <?php }?> value="72">72</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 73) {?> selected <?php }?> value="73">73</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 74) {?> selected <?php }?> value="74">74</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['start_length'] == 75) {?> selected <?php }?> value="75">75</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_length[]">
			     		 			 <option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 0) {?> selected <?php }?> value="0">请选择</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 35) {?> selected <?php }?> value="35">35</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 36) {?> selected <?php }?> value="36">36</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 37) {?> selected <?php }?> value="37">37</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 38) {?> selected <?php }?> value="38">38</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 39) {?> selected <?php }?> value="39">39</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 40) {?> selected <?php }?> value="40">40</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 41) {?> selected <?php }?> value="41">41</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 42) {?> selected <?php }?> value="42">42</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 43) {?> selected <?php }?> value="43">43</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 44) {?> selected <?php }?> value="44">44</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 45) {?> selected <?php }?> value="45">45</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 46) {?> selected <?php }?> value="46">46</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 47) {?> selected <?php }?> value="47">47</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 48) {?> selected <?php }?> value="48">48</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 49) {?> selected <?php }?> value="49">49</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 50) {?> selected <?php }?> value="50">50</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 51) {?> selected <?php }?> value="51">51</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 52) {?> selected <?php }?> value="52">52</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 53) {?> selected <?php }?> value="53">53</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 54) {?> selected <?php }?> value="54">54</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 55) {?> selected <?php }?> value="55">55</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 56) {?> selected <?php }?> value="56">56</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 57) {?> selected <?php }?> value="57">57</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 58) {?> selected <?php }?> value="58">58</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 59) {?> selected <?php }?> value="59">59</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 60) {?> selected <?php }?> value="60">60</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 61) {?> selected <?php }?> value="61">61</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 62) {?> selected <?php }?> value="62">62</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 63) {?> selected <?php }?> value="63">63</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 64) {?> selected <?php }?> value="64">64</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 65) {?> selected <?php }?> value="65">65</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 66) {?> selected <?php }?> value="66">66</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 67) {?> selected <?php }?> value="67">67</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 68) {?> selected <?php }?> value="68">68</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 69) {?> selected <?php }?> value="69">69</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 70) {?> selected <?php }?> value="70">70</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 71) {?> selected <?php }?> value="71">71</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 72) {?> selected <?php }?> value="72">72</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 73) {?> selected <?php }?> value="73">73</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 74) {?> selected <?php }?> value="74">74</option>
									<option <?php if ($_smarty_tpl->tpl_vars['brandSize']->value['end_length'] == 75) {?> selected <?php }?> value="75">75</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li> 
			     		 	</ul>
			     		 	<?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
			     		 	<span class="button size_plus" style="margin-top:0;">
				     		 	<img src="  /assets/images/plus.png">
				     	</span> 
				     	<?php } else { ?>
				     	<span class="button size_remove">
			     		 	<img src=" /assets/images/minus.png">
			     		 </span> 
			     		 <?php }?>
			     		 </div>
			     		 <?php
}
} else {
?>

			     		 <div>
			     		 <ul>
			     		 <li>
			     		 		<label>身高/体重</label> 
			     		 		<select name="height[]">
			     		 			<option value="0">请选择</option>
									<option value="146">146</option>
									<option value="147">147</option>
									<option value="148">148</option>
									<option value="149">149</option>
									<option value="150">150</option>
									<option value="151">151</option>
									<option value="152">152</option>
									<option value="153">153</option>
									<option value="154">154</option>
									<option value="155">155</option>
									<option value="156">156</option>
									<option value="157">157</option>
									<option value="158">158</option>
									<option value="159">159</option>
									<option value="160">160</option>
									<option value="161">161</option>
									<option value="162">162</option>
									<option value="163">163</option>
									<option value="164">164</option>
									<option value="165">165</option>
									<option value="166">166</option>
									<option value="167">167</option>
									<option value="168">168</option>
									<option value="169">169</option>
									<option value="170">170</option>
									<option value="171">171</option>
									<option value="172">172</option>
									<option value="173">173</option>
									<option value="174">174</option>
									<option value="175">175</option>
									<option value="176">176</option>
									<option value="177">177</option>
									<option value="178">178</option>
									<option value="179">179</option>
									<option value="180">180</option>
									<option value="181">181</option>
									<option value="182">182</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>&nbsp/&nbsp</span>
			     		 		<select name="weight[]">
			     		 			<option value="0">请选择</option>
									<option value="34">34</option>
									<option value="35">35</option>
									<option value="36">36</option>
									<option value="37">37</option>
									<option value="38">38</option>
									<option value="39">39</option>
									<option value="40">40</option>
									<option value="41">41</option>
									<option value="42">42</option>
									<option value="43">43</option>
									<option value="44">44</option>
									<option value="45">45</option>
									<option value="46">46</option>
									<option value="47">47</option>
									<option value="48">48</option>
									<option value="49">49</option>
									<option value="50">50</option>
									<option value="51">51</option>
									<option value="52">52</option>
									<option value="53">53</option>
									<option value="54">54</option>
									<option value="55">55</option>
									<option value="56">56</option>
									<option value="57">57</option>
									<option value="58">58</option>
									<option value="59">59</option>
									<option value="60">60</option>
									<option value="61">61</option>
									<option value="62">62</option>
									<option value="63">63</option>
									<option value="64">64</option>
									<option value="65">65</option>
									<option value="66">66</option>
									<option value="67">67</option>
									<option value="68">68</option>
									<option value="69">69</option>
									<option value="70">70</option>
									<option value="71">71</option>
									<option value="72">72</option>
									<option value="73">73</option>
									<option value="74">74</option>
									<option value="75">75</option>
									<option value="76">76</option>
									<option value="77">77</option>
									<option value="78">78</option>
									<option value="79">79</option>
									<option value="80">80</option>
									<option value="81">81</option>
									<option value="82">82</option>
									<option value="83">83</option>
									<option value="84">84</option>
									<option value="85">85</option>
									<option value="86">86</option>
									<option value="87">87</option>
									<option value="88">88</option>
			     		 		</select>
			     		 		<em> kg </em>
			     		 	</li>
			     		 	<li>
			     		 		<label>上装尺码：</label>
			     		 		<select name="size[]">
			     		 			<option value="0">请选择</option>
			     		 			<option value="1">XS</option>
			     		 			<option value="2">S</option>
			     		 			<option value="3">M</option>
			     		 			<option value="4">L</option>
			     		 			<option value="5">XL</option>
			     		 		</select>
			     		 	</li>
			     		 	<li>
			     		 		<label>胸围:</label>
			     		 		<select name="start_bust[]">
			     		 			<option value="0">请选择</option>
			     		 			<option value="65">65</option>
					                <option value="66">66</option>
					                <option value="67">67</option>
					                <option value="68">68</option>
					                <option value="69">69</option>
					                <option value="70">70</option>
					                <option value="71">71</option>
					                <option value="72">72</option>
					                <option value="73">73</option>
					                <option value="74">74</option>
					                <option value="75">75</option>
					                <option value="76">76</option>
					                <option value="77">77</option>
					                <option value="78">78</option>
					                <option value="79">79</option>
					                <option value="80">80</option>
					                <option value="81">81</option>
					                <option value="82">82</option>
					                <option value="83">83</option>
					                <option value="84">84</option>
					                <option value="85">85</option>
					                <option value="86">86</option>
					                <option value="87">87</option>
					                <option value="88">88</option>
					                <option value="89">89</option>
					                <option value="90">90</option>
					                <option value="91">91</option>
					                <option value="92">92</option>
					                <option value="93">93</option>
					                <option value="94">94</option>
					                <option value="95">95</option>
					                <option value="96">96</option>
					                <option value="97">97</option>
					                <option value="98">98</option>
					                <option value="99">99</option>
					                <option value="100">100</option>
					                <option value="101">101</option>
					                <option value="102">102</option>
					                <option value="103">103</option>
					                <option value="104">104</option>
					                <option value="105">105</option>
					                <option value="106">106</option>
					                <option value="107">107</option>
					                <option value="108">108</option>
					                <option value="109">109</option>
					                <option value="110">110</option>
					                <option value="111">111</option>
					                <option value="112">112</option>
					                <option value="113">113</option>
					                <option value="114">114</option>
					                <option value="115">115</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_bust[]">
			     		 			<option value="0">请选择</option>
			     		 			<option value="65">65</option>
					                <option value="66">66</option>
					                <option value="67">67</option>
					                <option value="68">68</option>
					                <option value="69">69</option>
					                <option value="70">70</option>
					                <option value="71">71</option>
					                <option value="72">72</option>
					                <option value="73">73</option>
					                <option value="74">74</option>
					                <option value="75">75</option>
					                <option value="76">76</option>
					                <option value="77">77</option>
					                <option value="78">78</option>
					                <option value="79">79</option>
					                <option value="80">80</option>
					                <option value="81">81</option>
					                <option value="82">82</option>
					                <option value="83">83</option>
					                <option value="84">84</option>
					                <option value="85">85</option>
					                <option value="86">86</option>
					                <option value="87">87</option>
					                <option value="88">88</option>
					                <option value="89">89</option>
					                <option value="90">90</option>
					                <option value="91">91</option>
					                <option value="92">92</option>
					                <option value="93">93</option>
					                <option value="94">94</option>
					                <option value="95">95</option>
					                <option value="96">96</option>
					                <option value="97">97</option>
					                <option value="98">98</option>
					                <option value="99">99</option>
					                <option value="100">100</option>
					                <option value="101">101</option>
					                <option value="102">102</option>
					                <option value="103">103</option>
					                <option value="104">104</option>
					                <option value="105">105</option>
					                <option value="106">106</option>
					                <option value="107">107</option>
					                <option value="108">108</option>
					                <option value="109">109</option>
					                <option value="110">110</option>
					                <option value="111">111</option>
					                <option value="112">112</option>
					                <option value="113">113</option>
					                <option value="114">114</option>
					                <option value="115">115</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li>
			     		    <li>
			     		 		<label>腰围：</label>
			     		 		<select name="start_kummerbund[]">
			     		 			  <option value="0">请选择</option>
			     		 			  <option value="44">44</option>
						              <option value="45">45</option>
						              <option value="46">46</option>
						              <option value="47">47</option>
						              <option value="48">48</option>
						              <option value="49">49</option>
						              <option value="50">50</option>
						              <option value="51">50</option>
						              <option value="52">52</option>
						              <option value="53">53</option>
						              <option value="54">54</option>
						              <option value="55">55</option>
						              <option value="56">56</option>
						              <option value="57">57</option>
						              <option value="58">58</option>
						              <option value="59">59</option>
						              <option value="60">60</option>
						              <option value="61">61</option>
						              <option value="62">62</option>
						              <option value="63">63</option>
						              <option value="64">64</option>
						              <option value="65">65</option>
						              <option value="66">66</option>
						              <option value="67">67</option>
						              <option value="68">68</option>
						              <option value="69">69</option>
						              <option value="70">70</option>
						              <option value="71">71</option>
						              <option value="72">72</option>
						              <option value="73">73</option>
						              <option value="74">74</option>
						              <option value="75">75</option>
						              <option value="76">76</option>
						              <option value="77">77</option>
						              <option value="78">78</option>
						              <option value="79">79</option>
						              <option value="80">80</option>
						              <option value="81">81</option>
						              <option value="82">82</option>
						              <option value="83">83</option>
						              <option value="84">84</option>
						              <option value="85">85</option>
						              <option value="86">86</option>
						              <option value="87">87</option>
						              <option value="88">88</option>
						              <option value="89">89</option>
						              <option value="90">90</option>
						              <option value="91">91</option>
						              <option value="92">92</option>
						              <option value="93">93</option>
						              <option value="94">94</option>
						              <option value="95">95</option>
						              <option value="96">96</option>
						              <option value="97">97</option>
						              <option value="98">98</option>
						              <option value="99">99</option>
						              <option value="100">100</option>
						              <option value="101">101</option>
						              <option value="102">102</option>
						              <option value="103">103</option>
						              <option value="104">104</option>
						              <option value="105">105</option>
						              <option value="106">106</option>
						              <option value="107">107</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_kummerbund[]">
			     		 			  <option value="0">请选择</option>
			     		 			  <option value="44">44</option>
						              <option value="45">45</option>
						              <option value="46">46</option>
						              <option value="47">47</option>
						              <option value="48">48</option>
						              <option value="49">49</option>
						              <option value="50">50</option>
						              <option value="51">50</option>
						              <option value="52">52</option>
						              <option value="53">53</option>
						              <option value="54">54</option>
						              <option value="55">55</option>
						              <option value="56">56</option>
						              <option value="57">57</option>
						              <option value="58">58</option>
						              <option value="59">59</option>
						              <option value="60">60</option>
						              <option value="61">61</option>
						              <option value="62">62</option>
						              <option value="63">63</option>
						              <option value="64">64</option>
						              <option value="65">65</option>
						              <option value="66">66</option>
						              <option value="67">67</option>
						              <option value="68">68</option>
						              <option value="69">69</option>
						              <option value="70">70</option>
						              <option value="71">71</option>
						              <option value="72">72</option>
						              <option value="73">73</option>
						              <option value="74">74</option>
						              <option value="75">75</option>
						              <option value="76">76</option>
						              <option value="77">77</option>
						              <option value="78">78</option>
						              <option value="79">79</option>
						              <option value="80">80</option>
						              <option value="81">81</option>
						              <option value="82">82</option>
						              <option value="83">83</option>
						              <option value="84">84</option>
						              <option value="85">85</option>
						              <option value="86">86</option>
						              <option value="87">87</option>
						              <option value="88">88</option>
						              <option value="89">89</option>
						              <option value="90">90</option>
						              <option value="91">91</option>
						              <option value="92">92</option>
						              <option value="93">93</option>
						              <option value="94">94</option>
						              <option value="95">95</option>
						              <option value="96">96</option>
						              <option value="97">97</option>
						              <option value="98">98</option>
						              <option value="99">99</option>
						              <option value="100">100</option>
						              <option value="101">101</option>
						              <option value="102">102</option>
						              <option value="103">103</option>
						              <option value="104">104</option>
						              <option value="105">105</option>
						              <option value="106">106</option>
						              <option value="107">107</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li>
			     		 	<li>
			     		 		<label>身高：</label>
			     		 		<select name="start_height[]">
			     		 			<option value="0">请选择</option>
									<option value="146">146</option>
									<option value="147">147</option>
									<option value="148">148</option>
									<option value="149">149</option>
									<option value="150">150</option>
									<option value="151">151</option>
									<option value="152">152</option>
									<option value="153">153</option>
									<option value="154">154</option>
									<option value="155">155</option>
									<option value="156">156</option>
									<option value="157">157</option>
									<option value="158">158</option>
									<option value="159">159</option>
									<option value="160">160</option>
									<option value="161">161</option>
									<option value="162">162</option>
									<option value="163">163</option>
									<option value="164">164</option>
									<option value="165">165</option>
									<option value="166">166</option>
									<option value="167">167</option>
									<option value="168">168</option>
									<option value="169">169</option>
									<option value="170">170</option>
									<option value="171">171</option>
									<option value="172">172</option>
									<option value="173">173</option>
									<option value="174">174</option>
									<option value="175">175</option>
									<option value="176">176</option>
									<option value="177">177</option>
									<option value="178">178</option>
									<option value="179">179</option>
									<option value="180">180</option>
									<option value="181">181</option>
									<option value="182">182</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_height[]">
			     		 			<option value="0">请选择</option>
									<option value="146">146</option>
									<option value="147">147</option>
									<option value="148">148</option>
									<option value="149">149</option>
									<option value="150">150</option>
									<option value="151">151</option>
									<option value="152">152</option>
									<option value="153">153</option>
									<option value="154">154</option>
									<option value="155">155</option>
									<option value="156">156</option>
									<option value="157">157</option>
									<option value="158">158</option>
									<option value="159">159</option>
									<option value="160">160</option>
									<option value="161">161</option>
									<option value="162">162</option>
									<option value="163">163</option>
									<option value="164">164</option>
									<option value="165">165</option>
									<option value="166">166</option>
									<option value="167">167</option>
									<option value="168">168</option>
									<option value="169">169</option>
									<option value="170">170</option>
									<option value="171">171</option>
									<option value="172">172</option>
									<option value="173">173</option>
									<option value="174">174</option>
									<option value="175">175</option>
									<option value="176">176</option>
									<option value="177">177</option>
									<option value="178">178</option>
									<option value="179">179</option>
									<option value="180">180</option>
									<option value="181">181</option>
									<option value="182">182</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li>
			     		 	<li>
			     		 		<label>体重：</label>
			     		 		<select name="start_weight[]">
			     		 			<option value="0">请选择</option>
									<option value="34">34</option>
									<option value="35">35</option>
									<option value="36">36</option>
									<option value="37">37</option>
									<option value="38">38</option>
									<option value="39">39</option>
									<option value="40">40</option>
									<option value="41">41</option>
									<option value="42">42</option>
									<option value="43">43</option>
									<option value="44">44</option>
									<option value="45">45</option>
									<option value="46">46</option>
									<option value="47">47</option>
									<option value="48">48</option>
									<option value="49">49</option>
									<option value="50">50</option>
									<option value="51">51</option>
									<option value="52">52</option>
									<option value="53">53</option>
									<option value="54">54</option>
									<option value="55">55</option>
									<option value="56">56</option>
									<option value="57">57</option>
									<option value="58">58</option>
									<option value="59">59</option>
									<option value="60">60</option>
									<option value="61">61</option>
									<option value="62">62</option>
									<option value="63">63</option>
									<option value="64">64</option>
									<option value="65">65</option>
									<option value="66">66</option>
									<option value="67">67</option>
									<option value="68">68</option>
									<option value="69">69</option>
									<option value="70">70</option>
									<option value="71">71</option>
									<option value="72">72</option>
									<option value="73">73</option>
									<option value="74">74</option>
									<option value="75">75</option>
									<option value="76">76</option>
									<option value="77">77</option>
									<option value="78">78</option>
									<option value="79">79</option>
									<option value="80">80</option>
									<option value="81">81</option>
									<option value="82">82</option>
									<option value="83">83</option>
									<option value="84">84</option>
									<option value="85">85</option>
									<option value="86">86</option>
									<option value="87">87</option>
									<option value="88">88</option>
			     		 		</select>
			     		 		<em> &nbspkg </em>
			     		 		<span>～</span>
			     		 		<select name="end_weight[]">
			     		 			<option value="0">请选择</option>
									<option value="34">34</option>
									<option value="35">35</option>
									<option value="36">36</option>
									<option value="37">37</option>
									<option value="38">38</option>
									<option value="39">39</option>
									<option value="40">40</option>
									<option value="41">41</option>
									<option value="42">42</option>
									<option value="43">43</option>
									<option value="44">44</option>
									<option value="45">45</option>
									<option value="46">46</option>
									<option value="47">47</option>
									<option value="48">48</option>
									<option value="49">49</option>
									<option value="50">50</option>
									<option value="51">51</option>
									<option value="52">52</option>
									<option value="53">53</option>
									<option value="54">54</option>
									<option value="55">55</option>
									<option value="56">56</option>
									<option value="57">57</option>
									<option value="58">58</option>
									<option value="59">59</option>
									<option value="60">60</option>
									<option value="61">61</option>
									<option value="62">62</option>
									<option value="63">63</option>
									<option value="64">64</option>
									<option value="65">65</option>
									<option value="66">66</option>
									<option value="67">67</option>
									<option value="68">68</option>
									<option value="69">69</option>
									<option value="70">70</option>
									<option value="71">71</option>
									<option value="72">72</option>
									<option value="73">73</option>
									<option value="74">74</option>
									<option value="75">75</option>
									<option value="76">76</option>
									<option value="77">77</option>
									<option value="78">78</option>
									<option value="79">79</option>
									<option value="80">80</option>
									<option value="81">81</option>
									<option value="82">82</option>
									<option value="83">83</option>
									<option value="84">84</option>
									<option value="85">85</option>
									<option value="86">86</option>
									<option value="87">87</option>
									<option value="88">88</option>
			     		 		</select>
			     		 		<em> kg </em>
			     		 	</li>
			     		 	<li>
			     		 		<label>肩宽：</label>
			     		 		<select name="start_s_width[]">
			     		 			  <option value="0">请选择</option>
			     		 			  <option value="30">30</option>
						              <option value="31">31</option>
						              <option value="32">32</option>
						              <option value="33">33</option>
						              <option value="34">34</option>
						              <option value="35">35</option>
						              <option value="36">36</option>
						              <option value="37">37</option>
						              <option value="38">38</option>
						              <option value="39">39</option>
						              <option value="40">40</option>
						              <option value="41">41</option>
						              <option value="42">42</option>
						              <option value="43">43</option>
						              <option value="44">44</option>
						              <option value="45">45</option>
						              <option value="46">46</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_s_width[]">
			     		 			 <option value="0">请选择</option>
			     		 			  <option value="30">30</option>
						              <option value="31">31</option>
						              <option value="32">32</option>
						              <option value="33">33</option>
						              <option value="34">34</option>
						              <option value="35">35</option>
						              <option value="36">36</option>
						              <option value="37">37</option>
						              <option value="38">38</option>
						              <option value="39">39</option>
						              <option value="40">40</option>
						              <option value="41">41</option>
						              <option value="42">42</option>
						              <option value="43">43</option>
						              <option value="44">44</option>
						              <option value="45">45</option>
						              <option value="46">46</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li> 
			     		 	<li>
			     		 		<label>衣长：</label>
			     		 		<select name="start_length[]">
			     		 			  <option value="0">请选择</option>
						              <option value="35">35</option>
						              <option value="36">36</option>
						              <option value="37">37</option>
						              <option value="38">38</option>
						              <option value="39">39</option>
						              <option value="40">40</option>
						              <option value="41">41</option>
						              <option value="42">42</option>
						              <option value="43">43</option>
						              <option value="44">44</option>
						              <option value="45">45</option>
						              <option value="46">46</option>
						              <option value="47">47</option>
									  <option value="48">48</option>
								      <option value="49">49</option>
									  <option value="50">50</option>
									  <option value="51">51</option>
									  <option value="52">52</option>
									  <option value="53">53</option>
									  <option value="54">54</option>
									  <option value="55">55</option>
									  <option value="56">56</option>
									  <option value="57">57</option>
									  <option value="58">58</option>
									  <option value="59">59</option>
									  <option value="60">60</option>
									  <option value="61">61</option>
									  <option value="62">62</option>
									  <option value="63">63</option>
									  <option value="64">64</option>
									  <option value="65">65</option>
									  <option value="66">66</option>
									  <option value="67">67</option>
								      <option value="68">68</option>
									  <option value="69">69</option>
									  <option value="70">70</option>
									  <option value="71">71</option>
									  <option value="72">72</option>
									  <option value="73">73</option>
									  <option value="74">74</option>
									  <option value="75">75</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_length[]">
			     		 			 <option value="0">请选择</option>
			     		 			 <option value="35">35</option>
						              <option value="36">36</option>
						              <option value="37">37</option>
						              <option value="38">38</option>
						              <option value="39">39</option>
						              <option value="40">40</option>
						              <option value="41">41</option>
						              <option value="42">42</option>
						              <option value="43">43</option>
						              <option value="44">44</option>
						              <option value="45">45</option>
						              <option value="46">46</option>
						              <option value="47">47</option>
									  <option value="48">48</option>
								      <option value="49">49</option>
									  <option value="50">50</option>
									  <option value="51">51</option>
									  <option value="52">52</option>
									  <option value="53">53</option>
									  <option value="54">54</option>
									  <option value="55">55</option>
									  <option value="56">56</option>
									  <option value="57">57</option>
									  <option value="58">58</option>
									  <option value="59">59</option>
									  <option value="60">60</option>
									  <option value="61">61</option>
									  <option value="62">62</option>
									  <option value="63">63</option>
									  <option value="64">64</option>
									  <option value="65">65</option>
									  <option value="66">66</option>
									  <option value="67">67</option>
								      <option value="68">68</option>
									  <option value="69">69</option>
									  <option value="70">70</option>
									  <option value="71">71</option>
									  <option value="72">72</option>
									  <option value="73">73</option>
									  <option value="74">74</option>
									  <option value="75">75</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li> 
			     	     </ul>
			     		 	<span class="button size_plus" style="margin-top:0;">
				     		 	<img src="  /assets/images/plus.png">
				     	</span> 
				     	
		     		</div>
			     		 	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		     	</div>
			    <div class="sub">
		    		<input type="submit" value="保存">
		    	</div>	
			 </form>
		</div>
		</div>
</body>
</html><?php }
}
