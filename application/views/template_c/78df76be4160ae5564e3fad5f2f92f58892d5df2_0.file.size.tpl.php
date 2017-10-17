<?php
/* Smarty version 3.1.31, created on 2017-10-13 18:23:44
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\brand\size.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59e0943031c2b6_37330149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78df76be4160ae5564e3fad5f2f92f58892d5df2' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\brand\\size.tpl',
      1 => 1507890217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_59e0943031c2b6_37330149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'品牌上装尺码对照'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'brand'), 0, false);
?>
 
			<div class="goods">
		    <div class="top_header">
			      <em class="size_infor">详情</em>
			     <span style="margin-left:0;padding-left:7px;">上装尺码对照表</span>
	        </div>
		     <form id="brandForm" action="/brand/brandsizeadd" method="post"  onsubmit="return check()">
		     	<div class="size_form"> 
		     		<div class="size_form_list">
		     			 <ul class="size_form_list1">
		     			 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brandSizes']->value, 'val', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
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
				     	
				     	<span class="button size_remove">
			     		 	<img src=" /assets/images/minus.png">
			     		 </span> 
			     		 </div>
			     		 <?php
}
} else {
?>

			     		 <div>
			     		 <ul>
			     		 <li>
			     		 		<label>身高/体重</label> 
			     		 		<select name="height">
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
			     		 		<select name="weight">
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
			     		 		<select name="size">
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
