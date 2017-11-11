{include file="common/head.tpl" pageTitle='品牌下装尺码对照'}	
{include file="common/menu.tpl" type='brand'} 
			<div class="goods">
		    <div class="top_header">
			      <ul class="top">
					<li> 品牌详情</li>
					<a href="/brand/brandSizeAdd?brand_id={$brandId}"><li> 上装品牌对照表</li></a>
					<a href="/brand/brandNumSizeAdd?brand_id={$brandId}"><li> 下装品牌对照表</li></a>
				</ul>
	        </div>
		     <form id="brandForm" action="/brand/brandNumSizeAdd" method="post"  onsubmit="return check()" enctype="multipart/form-data">
		     <input type="hidden" name="brand_id" value="{$brandId}">
		     	<div class="size_form"> 
		     	{if !empty($brandSizes)}
		     	  {foreach $brandSizes as $k=>$brandSize} 
		     		<div class="size_form_list">
		     			 <ul class="size_form_list1">
			     		 	<li>
			     		 		<label>身高/体重</label> 
			     		 		<select name="height[]">
			     		 			<option value="0">请选择</option>
									<option {if $brandSize['height']==146} selected {/if} value="146">146</option>
									<option {if $brandSize['height']==147} selected {/if} value="147">147</option>
									<option {if $brandSize['height']==148} selected {/if} value="148">148</option>
									<option {if $brandSize['height']==149} selected {/if} value="149">149</option>
									<option {if $brandSize['height']==150} selected {/if} value="150">150</option>
									<option {if $brandSize['height']==151} selected {/if} value="151">151</option>
									<option {if $brandSize['height']==152} selected {/if} value="152">152</option>
									<option {if $brandSize['height']==153} selected {/if} value="153">153</option>
									<option {if $brandSize['height']==154} selected {/if} value="154">154</option>
									<option {if $brandSize['height']==155} selected {/if} value="155">155</option>
									<option {if $brandSize['height']==156} selected {/if} value="156">156</option>
									<option {if $brandSize['height']==157} selected {/if} value="157">157</option>
									<option {if $brandSize['height']==158} selected {/if} value="158">158</option>
									<option {if $brandSize['height']==159} selected {/if} value="159">159</option>
									<option {if $brandSize['height']==160} selected {/if} value="160">160</option>
									<option {if $brandSize['height']==161} selected {/if} value="161">161</option>
									<option {if $brandSize['height']==162} selected {/if} value="162">162</option>
									<option {if $brandSize['height']==163} selected {/if} value="163">163</option>
									<option {if $brandSize['height']==164} selected {/if} value="164">164</option>
									<option {if $brandSize['height']==165} selected {/if} value="165">165</option>
									<option {if $brandSize['height']==166} selected {/if} value="166">166</option>
									<option {if $brandSize['height']==167} selected {/if} value="167">167</option>
									<option {if $brandSize['height']==168} selected {/if} value="168">168</option>
									<option {if $brandSize['height']==169} selected {/if} value="169">169</option>
									<option {if $brandSize['height']==170} selected {/if} value="170">170</option>
									<option {if $brandSize['height']==171} selected {/if} value="171">171</option>
									<option {if $brandSize['height']==172} selected {/if} value="172">172</option>
									<option {if $brandSize['height']==173} selected {/if} value="173">173</option>
									<option {if $brandSize['height']==174} selected {/if} value="174">174</option>
									<option {if $brandSize['height']==175} selected {/if} value="175">175</option>
									<option {if $brandSize['height']==176} selected {/if} value="176">176</option>
									<option {if $brandSize['height']==177} selected {/if} value="177">177</option>
									<option {if $brandSize['height']==178} selected {/if} value="178">178</option>
									<option {if $brandSize['height']==179} selected {/if} value="179">179</option>
									<option {if $brandSize['height']==180} selected {/if} value="180">180</option>
									<option {if $brandSize['height']==181} selected {/if} value="181">181</option>
									<option {if $brandSize['height']==182} selected {/if} value="182">182</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>&nbsp/&nbsp</span>
			     		 		<select name="weight[]">
			     		 			<option {if $brandSize['weight']==0} selected {/if} value="0">请选择</option>
									<option {if $brandSize['weight']==34} selected {/if} value="34">34</option>
									<option {if $brandSize['weight']==35} selected {/if} value="35">35</option>
									<option {if $brandSize['weight']==36} selected {/if} value="36">36</option>
									<option {if $brandSize['weight']==37} selected {/if} value="37">37</option>
									<option {if $brandSize['weight']==38} selected {/if} value="38">38</option>
									<option {if $brandSize['weight']==39} selected {/if} value="39">39</option>
									<option {if $brandSize['weight']==40} selected {/if} value="40">40</option>
									<option {if $brandSize['weight']==41} selected {/if} value="41">41</option>
									<option {if $brandSize['weight']==42} selected {/if} value="42">42</option>
									<option {if $brandSize['weight']==43} selected {/if} value="43">43</option>
									<option {if $brandSize['weight']==44} selected {/if} value="44">44</option>
									<option {if $brandSize['weight']==45} selected {/if} value="45">45</option>
									<option {if $brandSize['weight']==46} selected {/if} value="46">46</option>
									<option {if $brandSize['weight']==47} selected {/if} value="47">47</option>
									<option {if $brandSize['weight']==48} selected {/if} value="48">48</option>
									<option {if $brandSize['weight']==49} selected {/if} value="49">49</option>
									<option {if $brandSize['weight']==50} selected {/if} value="50">50</option>
									<option {if $brandSize['weight']==51} selected {/if} value="51">51</option>
									<option {if $brandSize['weight']==52} selected {/if} value="52">52</option>
									<option {if $brandSize['weight']==53} selected {/if} value="53">53</option>
									<option {if $brandSize['weight']==54} selected {/if} value="54">54</option>
									<option {if $brandSize['weight']==55} selected {/if} value="55">55</option>
									<option {if $brandSize['weight']==56} selected {/if} value="56">56</option>
									<option {if $brandSize['weight']==57} selected {/if} value="57">57</option>
									<option {if $brandSize['weight']==58} selected {/if} value="58">58</option>
									<option {if $brandSize['weight']==59} selected {/if} value="59">59</option>
									<option {if $brandSize['weight']==60} selected {/if} value="60">60</option>
									<option {if $brandSize['weight']==61} selected {/if} value="61">61</option>
									<option {if $brandSize['weight']==62} selected {/if} value="62">62</option>
									<option {if $brandSize['weight']==63} selected {/if} value="63">63</option>
									<option {if $brandSize['weight']==64} selected {/if} value="64">64</option>
									<option {if $brandSize['weight']==65} selected {/if} value="65">65</option>
									<option {if $brandSize['weight']==66} selected {/if} value="66">66</option>
									<option {if $brandSize['weight']==67} selected {/if} value="67">67</option>
									<option {if $brandSize['weight']==68} selected {/if} value="68">68</option>
									<option {if $brandSize['weight']==69} selected {/if} value="69">69</option>
									<option {if $brandSize['weight']==70} selected {/if} value="70">70</option>
									<option {if $brandSize['weight']==71} selected {/if} value="71">71</option>
									<option {if $brandSize['weight']==72} selected {/if} value="72">72</option>
									<option {if $brandSize['weight']==73} selected {/if} value="73">73</option>
									<option {if $brandSize['weight']==74} selected {/if} value="74">74</option>
									<option {if $brandSize['weight']==75} selected {/if} value="75">75</option>
									<option {if $brandSize['weight']==76} selected {/if} value="76">76</option>
									<option {if $brandSize['weight']==77} selected {/if} value="77">77</option>
									<option {if $brandSize['weight']==78} selected {/if} value="78">78</option>
									<option {if $brandSize['weight']==79} selected {/if} value="79">79</option>
									<option {if $brandSize['weight']==80} selected {/if} value="80">80</option>
									<option {if $brandSize['weight']==81} selected {/if} value="81">81</option>
									<option {if $brandSize['weight']==82} selected {/if} value="82">82</option>
									<option {if $brandSize['weight']==83} selected {/if} value="83">83</option>
									<option {if $brandSize['weight']==84} selected {/if} value="84">84</option>
									<option {if $brandSize['weight']==85} selected {/if} value="85">85</option>
									<option {if $brandSize['weight']==86} selected {/if} value="86">86</option>
									<option {if $brandSize['weight']==87} selected {/if} value="87">87</option>
									<option {if $brandSize['weight']==88} selected {/if} value="88">88</option>
			     		 		</select>
			     		 		<em> kg </em>
			     		 	</li>
			     		 	<li>
			     		 		<label>下装尺码：</label>
			     		 		<select name="size[]">
			     		 			<option {if $brandSize['size']==0} selected {/if} value="0">请选择</option>
			     		 			<option {if $brandSize['size']==1} selected {/if} value="1">25</option>
			     		 			<option {if $brandSize['size']==2} selected {/if} value="2">26</option>
			     		 			<option {if $brandSize['size']==3} selected {/if} value="3">27</option>
			     		 			<option {if $brandSize['size']==4} selected {/if} value="4">28</option>
			     		 			<option {if $brandSize['size']==5} selected {/if} value="5">29</option>
			     		 			<option {if $brandSize['size']==6} selected {/if} value="6">30</option>
			     		 			<option {if $brandSize['size']==7} selected {/if} value="7">31</option>
			     		 			<option {if $brandSize['size']==8} selected {/if} value="8">32</option>
			     		 		</select>
			     		 	</li>
			     		 	<li>
			     		 		<label>大腿围:</label>
			     		 		<select name="start_thigh_girth[]">
			     		 			<option {if $brandSize['start_thigh_girth']==0} selected {/if} value="0">请选择</option>
			     		 			<option {if $brandSize['start_thigh_girth']==40} selected {/if} value="40">40</option>
						            <option {if $brandSize['start_thigh_girth']==41} selected {/if} value="41">41</option>
						            <option {if $brandSize['start_thigh_girth']==42} selected {/if} value="42">42</option>
						            <option {if $brandSize['start_thigh_girth']==43} selected {/if} value="43">43</option>
						            <option {if $brandSize['start_thigh_girth']==44} selected {/if} value="44">44</option>
						            <option {if $brandSize['start_thigh_girth']==45} selected {/if} value="45">45</option>
						            <option {if $brandSize['start_thigh_girth']==46} selected {/if} value="46">46</option>
						            <option {if $brandSize['start_thigh_girth']==47} selected {/if} value="47">47</option>
						            <option {if $brandSize['start_thigh_girth']==48} selected {/if} value="48">48</option>
						            <option {if $brandSize['start_thigh_girth']==49} selected {/if} value="49">49</option>
						            <option {if $brandSize['start_thigh_girth']==50} selected {/if} value="50">50</option>
						            <option {if $brandSize['start_thigh_girth']==51} selected {/if} value="51">50</option>
						            <option {if $brandSize['start_thigh_girth']==52} selected {/if} value="52">52</option>
						            <option {if $brandSize['start_thigh_girth']==53} selected {/if} value="53">53</option>
					                <option {if $brandSize['start_thigh_girth']==54} selected {/if} value="54">54</option>
					                <option {if $brandSize['start_thigh_girth']==55} selected {/if} value="55">55</option>
				     	            <option {if $brandSize['start_thigh_girth']==56} selected {/if} value="56">56</option>
						            <option {if $brandSize['start_thigh_girth']==57} selected {/if} value="57">57</option>
						            <option {if $brandSize['start_thigh_girth']==58} selected {/if} value="58">58</option>
						            <option {if $brandSize['start_thigh_girth']==59} selected {/if} value="59">59</option>
						            <option {if $brandSize['start_thigh_girth']==60} selected {/if} value="60">60</option>
						            <option {if $brandSize['start_thigh_girth']==61} selected {/if} value="61">61</option>
						            <option {if $brandSize['start_thigh_girth']==62} selected {/if} value="62">62</option>
				                    <option {if $brandSize['start_thigh_girth']==63} selected {/if} value="63">63</option>
						            <option {if $brandSize['start_thigh_girth']==64} selected {/if} value="64">64</option>
						            <option {if $brandSize['start_thigh_girth']==65} selected {/if} value="65">65</option>
						            <option {if $brandSize['start_thigh_girth']==66} selected {/if} value="66">66</option>
						            <option {if $brandSize['start_thigh_girth']==67} selected {/if} value="67">67</option>
						            <option {if $brandSize['start_thigh_girth']==68} selected {/if} value="68">68</option>
						            <option {if $brandSize['start_thigh_girth']==69} selected {/if} value="69">69</option>
						            <option {if $brandSize['start_thigh_girth']==70} selected {/if} value="70">70</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_thigh_girth[]">
			     		 			<option {if $brandSize['end_thigh_girth']==0} selected {/if} value="0">请选择</option>
			     		 			<option {if $brandSize['end_thigh_girth']==40} selected {/if} value="40">40</option>
						            <option {if $brandSize['end_thigh_girth']==41} selected {/if} value="41">41</option>
						            <option {if $brandSize['end_thigh_girth']==42} selected {/if} value="42">42</option>
						            <option {if $brandSize['end_thigh_girth']==43} selected {/if} value="43">43</option>
						            <option {if $brandSize['end_thigh_girth']==44} selected {/if} value="44">44</option>
						            <option {if $brandSize['end_thigh_girth']==45} selected {/if} value="45">45</option>
						            <option {if $brandSize['end_thigh_girth']==46} selected {/if} value="46">46</option>
						            <option {if $brandSize['end_thigh_girth']==47} selected {/if} value="47">47</option>
						            <option {if $brandSize['end_thigh_girth']==48} selected {/if} value="48">48</option>
						            <option {if $brandSize['end_thigh_girth']==49} selected {/if} value="49">49</option>
						            <option {if $brandSize['end_thigh_girth']==50} selected {/if} value="50">50</option>
						            <option {if $brandSize['end_thigh_girth']==51} selected {/if} value="51">51</option>
						            <option {if $brandSize['end_thigh_girth']==52} selected {/if} value="52">52</option>
						            <option {if $brandSize['end_thigh_girth']==53} selected {/if} value="53">53</option>
					                <option {if $brandSize['end_thigh_girth']==54} selected {/if} value="54">54</option>
					                <option {if $brandSize['end_thigh_girth']==55} selected {/if} value="55">55</option>
				     	            <option {if $brandSize['end_thigh_girth']==56} selected {/if} value="56">56</option>
						            <option {if $brandSize['end_thigh_girth']==57} selected {/if} value="57">57</option>
						            <option {if $brandSize['end_thigh_girth']==58} selected {/if} value="58">58</option>
						            <option {if $brandSize['end_thigh_girth']==59} selected {/if} value="59">59</option>
						            <option {if $brandSize['end_thigh_girth']==60} selected {/if} value="60">60</option>
						            <option {if $brandSize['end_thigh_girth']==61} selected {/if} value="61">61</option>
						            <option {if $brandSize['end_thigh_girth']==62} selected {/if} value="62">62</option>
				                    <option {if $brandSize['end_thigh_girth']==63} selected {/if} value="63">63</option>
						            <option {if $brandSize['end_thigh_girth']==64} selected {/if} value="64">64</option>
						            <option {if $brandSize['end_thigh_girth']==65} selected {/if} value="65">65</option>
						            <option {if $brandSize['end_thigh_girth']==66} selected {/if} value="66">66</option>
						            <option {if $brandSize['end_thigh_girth']==67} selected {/if} value="67">67</option>
						            <option {if $brandSize['end_thigh_girth']==68} selected {/if} value="68">68</option>
						            <option {if $brandSize['end_thigh_girth']==69} selected {/if} value="69">69</option>
						            <option {if $brandSize['end_thigh_girth']==70} selected {/if} value="70">70</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li>
			     		    <li>
			     		 		<label>腰围：</label>
			     		 		<select name="start_kummerbund[]">
			     		 			  <option {if $brandSize['start_kummerbund']== 0} selected {/if} value="0">请选择</option>
			     		 			  <option {if $brandSize['start_kummerbund']== 44} selected {/if} value="44">44</option>
						              <option {if $brandSize['start_kummerbund']== 45} selected {/if} value="45">45</option>
						              <option {if $brandSize['start_kummerbund']== 46} selected {/if} value="46">46</option>
						              <option {if $brandSize['start_kummerbund']== 47} selected {/if} value="47">47</option>
						              <option {if $brandSize['start_kummerbund']== 48} selected {/if} value="48">48</option>
						              <option {if $brandSize['start_kummerbund']== 49} selected {/if} value="49">49</option>
						              <option {if $brandSize['start_kummerbund']== 50} selected {/if} value="50">50</option>
						              <option {if $brandSize['start_kummerbund']== 51} selected {/if} value="51">50</option>
						              <option {if $brandSize['start_kummerbund']== 52} selected {/if} value="52">52</option>
						              <option {if $brandSize['start_kummerbund']== 53} selected {/if} value="53">53</option>
						              <option {if $brandSize['start_kummerbund']== 54} selected {/if} value="54">54</option>
						              <option {if $brandSize['start_kummerbund']== 55} selected {/if} value="55">55</option>
						              <option {if $brandSize['start_kummerbund']== 56} selected {/if} value="56">56</option>
						              <option {if $brandSize['start_kummerbund']== 57} selected {/if} value="57">57</option>
						              <option {if $brandSize['start_kummerbund']== 58} selected {/if} value="58">58</option>
						              <option {if $brandSize['start_kummerbund']== 59} selected {/if} value="59">59</option>
						              <option {if $brandSize['start_kummerbund']== 60} selected {/if} value="60">60</option>
						              <option {if $brandSize['start_kummerbund']== 61} selected {/if} value="61">61</option>
						              <option {if $brandSize['start_kummerbund']== 62} selected {/if} value="62">62</option>
						              <option {if $brandSize['start_kummerbund']== 63} selected {/if} value="63">63</option>
						              <option {if $brandSize['start_kummerbund']== 64} selected {/if} value="64">64</option>
						              <option {if $brandSize['start_kummerbund']== 65} selected {/if} value="65">65</option>
						              <option {if $brandSize['start_kummerbund']== 66} selected {/if} value="66">66</option>
						              <option {if $brandSize['start_kummerbund']== 67} selected {/if} value="67">67</option>
						              <option {if $brandSize['start_kummerbund']== 68} selected {/if} value="68">68</option>
						              <option {if $brandSize['start_kummerbund']== 69} selected {/if} value="69">69</option>
						              <option {if $brandSize['start_kummerbund']== 70} selected {/if} value="70">70</option>
						              <option {if $brandSize['start_kummerbund']== 71} selected {/if} value="71">71</option>
						              <option {if $brandSize['start_kummerbund']== 72} selected {/if} value="72">72</option>
						              <option {if $brandSize['start_kummerbund']== 73} selected {/if} value="73">73</option>
						              <option {if $brandSize['start_kummerbund']== 74} selected {/if} value="74">74</option>
						              <option {if $brandSize['start_kummerbund']== 75} selected {/if} value="75">75</option>
						              <option {if $brandSize['start_kummerbund']== 76} selected {/if} value="76">76</option>
						              <option {if $brandSize['start_kummerbund']== 77} selected {/if} value="77">77</option>
						              <option {if $brandSize['start_kummerbund']== 78} selected {/if} value="78">78</option>
						              <option {if $brandSize['start_kummerbund']== 79} selected {/if} value="79">79</option>
						              <option {if $brandSize['start_kummerbund']== 80} selected {/if} value="80">80</option>
						              <option {if $brandSize['start_kummerbund']== 81} selected {/if} value="81">81</option>
						              <option {if $brandSize['start_kummerbund']== 82} selected {/if} value="82">82</option>
						              <option {if $brandSize['start_kummerbund']== 83} selected {/if} value="83">83</option>
						              <option {if $brandSize['start_kummerbund']== 84} selected {/if} value="84">84</option>
						              <option {if $brandSize['start_kummerbund']== 85} selected {/if} value="85">85</option>
						              <option {if $brandSize['start_kummerbund']== 86} selected {/if} value="86">86</option>
						              <option {if $brandSize['start_kummerbund']== 87} selected {/if} value="87">87</option>
						              <option {if $brandSize['start_kummerbund']== 88} selected {/if} value="88">88</option>
						              <option {if $brandSize['start_kummerbund']== 89} selected {/if} value="89">89</option>
						              <option {if $brandSize['start_kummerbund']== 90} selected {/if} value="90">90</option>
						              <option {if $brandSize['start_kummerbund']== 91} selected {/if} value="91">91</option>
						              <option {if $brandSize['start_kummerbund']== 92} selected {/if} value="92">92</option>
						              <option {if $brandSize['start_kummerbund']== 93} selected {/if} value="93">93</option>
						              <option {if $brandSize['start_kummerbund']== 94} selected {/if} value="94">94</option>
						              <option {if $brandSize['start_kummerbund']== 95} selected {/if} value="95">95</option>
						              <option {if $brandSize['start_kummerbund']== 96} selected {/if} value="96">96</option>
						              <option {if $brandSize['start_kummerbund']== 97} selected {/if} value="97">97</option>
						              <option {if $brandSize['start_kummerbund']== 98} selected {/if} value="98">98</option>
						              <option {if $brandSize['start_kummerbund']== 99} selected {/if} value="99">99</option>
						              <option {if $brandSize['start_kummerbund']== 100} selected {/if} value="100">100</option>
						              <option {if $brandSize['start_kummerbund']== 101} selected {/if} value="101">101</option>
						              <option {if $brandSize['start_kummerbund']== 102} selected {/if} value="102">102</option>
						              <option {if $brandSize['start_kummerbund']== 103} selected {/if} value="103">103</option>
						              <option {if $brandSize['start_kummerbund']== 104} selected {/if} value="104">104</option>
						              <option {if $brandSize['start_kummerbund']== 105} selected {/if} value="105">105</option>
						              <option {if $brandSize['start_kummerbund']== 106} selected {/if} value="106">106</option>
						              <option {if $brandSize['start_kummerbund']== 107} selected {/if} value="107">107</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_kummerbund[]">
			     		 			  <option {if $brandSize['end_kummerbund']== 0} selected {/if} value="0">请选择</option>
			     		 			  <option {if $brandSize['end_kummerbund']== 44} selected {/if}value="44">44</option>
						              <option {if $brandSize['end_kummerbund']== 45} selected {/if}value="45">45</option>
						              <option {if $brandSize['end_kummerbund']== 46} selected {/if}value="46">46</option>
						              <option {if $brandSize['end_kummerbund']== 47} selected {/if}value="47">47</option>
						              <option {if $brandSize['end_kummerbund']== 48} selected {/if}value="48">48</option>
						              <option {if $brandSize['end_kummerbund']== 49} selected {/if}value="49">49</option>
						              <option {if $brandSize['end_kummerbund']== 50} selected {/if}value="50">50</option>
						              <option {if $brandSize['end_kummerbund']== 51} selected {/if}value="51">51</option>
						              <option {if $brandSize['end_kummerbund']== 52} selected {/if}value="52">52</option>
						              <option {if $brandSize['end_kummerbund']== 53} selected {/if}value="53">53</option>
						              <option {if $brandSize['end_kummerbund']== 54} selected {/if}value="54">54</option>
						              <option {if $brandSize['end_kummerbund']== 55} selected {/if}value="55">55</option>
						              <option {if $brandSize['end_kummerbund']== 56} selected {/if}value="56">56</option>
						              <option {if $brandSize['end_kummerbund']== 57} selected {/if}value="57">57</option>
						              <option {if $brandSize['end_kummerbund']== 58} selected {/if}value="58">58</option>
						              <option {if $brandSize['end_kummerbund']== 59} selected {/if}value="59">59</option>
						              <option {if $brandSize['end_kummerbund']== 60} selected {/if}value="60">60</option>
						              <option {if $brandSize['end_kummerbund']== 61} selected {/if}value="61">61</option>
						              <option {if $brandSize['end_kummerbund']== 62} selected {/if}value="62">62</option>
						              <option {if $brandSize['end_kummerbund']== 63} selected {/if}value="63">63</option>
						              <option {if $brandSize['end_kummerbund']== 64} selected {/if}value="64">64</option>
						              <option {if $brandSize['end_kummerbund']== 65} selected {/if}value="65">65</option>
						              <option {if $brandSize['end_kummerbund']== 66} selected {/if}value="66">66</option>
						              <option {if $brandSize['end_kummerbund']== 67} selected {/if}value="67">67</option>
						              <option {if $brandSize['end_kummerbund']== 68} selected {/if}value="68">68</option>
						              <option {if $brandSize['end_kummerbund']== 69} selected {/if}value="69">69</option>
						              <option {if $brandSize['end_kummerbund']== 70} selected {/if}value="70">70</option>
						              <option {if $brandSize['end_kummerbund']== 71} selected {/if}value="71">71</option>
						              <option {if $brandSize['end_kummerbund']== 72} selected {/if}value="72">72</option>
						              <option {if $brandSize['end_kummerbund']== 73} selected {/if}value="73">73</option>
						              <option {if $brandSize['end_kummerbund']== 74} selected {/if}value="74">74</option>
						              <option {if $brandSize['end_kummerbund']== 75} selected {/if}value="75">75</option>
						              <option {if $brandSize['end_kummerbund']== 76} selected {/if}value="76">76</option>
						              <option {if $brandSize['end_kummerbund']== 77} selected {/if}value="77">77</option>
						              <option {if $brandSize['end_kummerbund']== 78} selected {/if}value="78">78</option>
						              <option {if $brandSize['end_kummerbund']== 79} selected {/if}value="79">79</option>
						              <option {if $brandSize['end_kummerbund']== 80} selected {/if}value="80">80</option>
						              <option {if $brandSize['end_kummerbund']== 81} selected {/if}value="81">81</option>
						              <option {if $brandSize['end_kummerbund']== 82} selected {/if}value="82">82</option>
						              <option {if $brandSize['end_kummerbund']== 83} selected {/if}value="83">83</option>
						              <option {if $brandSize['end_kummerbund']== 84} selected {/if}value="84">84</option>
						              <option {if $brandSize['end_kummerbund']== 85} selected {/if}value="85">85</option>
						              <option {if $brandSize['end_kummerbund']== 86} selected {/if}value="86">86</option>
						              <option {if $brandSize['end_kummerbund']== 87} selected {/if}value="87">87</option>
						              <option {if $brandSize['end_kummerbund']== 88} selected {/if}value="88">88</option>
						              <option {if $brandSize['end_kummerbund']== 89} selected {/if}value="89">89</option>
						              <option {if $brandSize['end_kummerbund']== 90} selected {/if}value="90">90</option>
						              <option {if $brandSize['end_kummerbund']== 91} selected {/if}value="91">91</option>
						              <option {if $brandSize['end_kummerbund']== 92} selected {/if}value="92">92</option>
						              <option {if $brandSize['end_kummerbund']== 93} selected {/if}value="93">93</option>
						              <option {if $brandSize['end_kummerbund']== 94} selected {/if}value="94">94</option>
						              <option {if $brandSize['end_kummerbund']== 95} selected {/if}value="95">95</option>
						              <option {if $brandSize['end_kummerbund']== 96} selected {/if}value="96">96</option>
						              <option {if $brandSize['end_kummerbund']== 97} selected {/if}value="97">97</option>
						              <option {if $brandSize['end_kummerbund']== 98} selected {/if}value="98">98</option>
						              <option {if $brandSize['end_kummerbund']== 99} selected {/if}value="99">99</option>
						              <option {if $brandSize['end_kummerbund']== 100} selected {/if}value="100">100</option>
						              <option {if $brandSize['end_kummerbund']== 101} selected {/if}value="101">101</option>
						              <option {if $brandSize['end_kummerbund']== 102} selected {/if}value="102">102</option>
						              <option {if $brandSize['end_kummerbund']== 103} selected {/if}value="103">103</option>
						              <option {if $brandSize['end_kummerbund']== 104} selected {/if}value="104">104</option>
						              <option {if $brandSize['end_kummerbund']== 105} selected {/if}value="105">105</option>
						              <option {if $brandSize['end_kummerbund']== 106} selected {/if}value="106">106</option>
						              <option {if $brandSize['end_kummerbund']== 107} selected {/if}value="107">107</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li>
			     		 	<li>
			     		 		<label>身高：</label>
			     		 		<select name="start_height[]">
			     		 			<option {if $brandSize['start_height']== 0} selected {/if} value="0">请选择</option>
									<option {if $brandSize['start_height']== 146} selected {/if} value="146">146</option>
									<option {if $brandSize['start_height']== 147} selected {/if} value="147">147</option>
									<option {if $brandSize['start_height']== 148} selected {/if} value="148">148</option>
									<option {if $brandSize['start_height']== 149} selected {/if} value="149">149</option>
									<option {if $brandSize['start_height']== 150} selected {/if} value="150">150</option>
									<option {if $brandSize['start_height']== 151} selected {/if} value="151">151</option>
									<option {if $brandSize['start_height']== 152} selected {/if} value="152">152</option>
									<option {if $brandSize['start_height']== 153} selected {/if} value="153">153</option>
									<option {if $brandSize['start_height']== 154} selected {/if} value="154">154</option>
									<option {if $brandSize['start_height']== 155} selected {/if} value="155">155</option>
									<option {if $brandSize['start_height']== 156} selected {/if} value="156">156</option>
									<option {if $brandSize['start_height']== 157} selected {/if} value="157">157</option>
									<option {if $brandSize['start_height']== 158} selected {/if} value="158">158</option>
									<option {if $brandSize['start_height']== 159} selected {/if} value="159">159</option>
									<option {if $brandSize['start_height']== 160} selected {/if} value="160">160</option>
									<option {if $brandSize['start_height']== 161} selected {/if} value="161">161</option>
									<option {if $brandSize['start_height']== 162} selected {/if} value="162">162</option>
									<option {if $brandSize['start_height']== 163} selected {/if} value="163">163</option>
									<option {if $brandSize['start_height']== 164} selected {/if} value="164">164</option>
									<option {if $brandSize['start_height']== 165} selected {/if} value="165">165</option>
									<option {if $brandSize['start_height']== 166} selected {/if} value="166">166</option>
									<option {if $brandSize['start_height']== 167} selected {/if} value="167">167</option>
									<option {if $brandSize['start_height']== 168} selected {/if} value="168">168</option>
									<option {if $brandSize['start_height']== 169} selected {/if} value="169">169</option>
									<option {if $brandSize['start_height']== 170} selected {/if} value="170">170</option>
									<option {if $brandSize['start_height']== 171} selected {/if} value="171">171</option>
									<option {if $brandSize['start_height']== 172} selected {/if} value="172">172</option>
									<option {if $brandSize['start_height']== 173} selected {/if} value="173">173</option>
									<option {if $brandSize['start_height']== 174} selected {/if} value="174">174</option>
									<option {if $brandSize['start_height']== 175} selected {/if} value="175">175</option>
									<option {if $brandSize['start_height']== 176} selected {/if} value="176">176</option>
									<option {if $brandSize['start_height']== 177} selected {/if} value="177">177</option>
									<option {if $brandSize['start_height']== 178} selected {/if} value="178">178</option>
									<option {if $brandSize['start_height']== 179} selected {/if} value="179">179</option>
									<option {if $brandSize['start_height']== 180} selected {/if} value="180">180</option>
									<option {if $brandSize['start_height']== 181} selected {/if} value="181">181</option>
									<option {if $brandSize['start_height']== 182} selected {/if} value="182">182</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_height[]">
			     		 			<option {if $brandSize['end_height']== 0} selected {/if} value="0">请选择</option>
									<option {if $brandSize['end_height']== 146} selected {/if} value="146">146</option>
									<option {if $brandSize['end_height']== 147} selected {/if} value="147">147</option>
									<option {if $brandSize['end_height']== 148} selected {/if} value="148">148</option>
									<option {if $brandSize['end_height']== 149} selected {/if} value="149">149</option>
									<option {if $brandSize['end_height']== 150} selected {/if} value="150">150</option>
									<option {if $brandSize['end_height']== 151} selected {/if} value="151">151</option>
									<option {if $brandSize['end_height']== 152} selected {/if} value="152">152</option>
									<option {if $brandSize['end_height']== 153} selected {/if} value="153">153</option>
									<option {if $brandSize['end_height']== 154} selected {/if} value="154">154</option>
									<option {if $brandSize['end_height']== 155} selected {/if} value="155">155</option>
									<option {if $brandSize['end_height']== 156} selected {/if} value="156">156</option>
									<option {if $brandSize['end_height']== 157} selected {/if} value="157">157</option>
									<option {if $brandSize['end_height']== 158} selected {/if} value="158">158</option>
									<option {if $brandSize['end_height']== 159} selected {/if} value="159">159</option>
									<option {if $brandSize['end_height']== 160} selected {/if} value="160">160</option>
									<option {if $brandSize['end_height']== 161} selected {/if} value="161">161</option>
									<option {if $brandSize['end_height']== 162} selected {/if} value="162">162</option>
									<option {if $brandSize['end_height']== 163} selected {/if} value="163">163</option>
									<option {if $brandSize['end_height']== 164} selected {/if} value="164">164</option>
									<option {if $brandSize['end_height']== 165} selected {/if} value="165">165</option>
									<option {if $brandSize['end_height']== 166} selected {/if} value="166">166</option>
									<option {if $brandSize['end_height']== 167} selected {/if} value="167">167</option>
									<option {if $brandSize['end_height']== 168} selected {/if} value="168">168</option>
									<option {if $brandSize['end_height']== 169} selected {/if} value="169">169</option>
									<option {if $brandSize['end_height']== 170} selected {/if} value="170">170</option>
									<option {if $brandSize['end_height']== 171} selected {/if} value="171">171</option>
									<option {if $brandSize['end_height']== 172} selected {/if} value="172">172</option>
									<option {if $brandSize['end_height']== 173} selected {/if} value="173">173</option>
									<option {if $brandSize['end_height']== 174} selected {/if} value="174">174</option>
									<option {if $brandSize['end_height']== 175} selected {/if} value="175">175</option>
									<option {if $brandSize['end_height']== 176} selected {/if} value="176">176</option>
									<option {if $brandSize['end_height']== 177} selected {/if} value="177">177</option>
									<option {if $brandSize['end_height']== 178} selected {/if} value="178">178</option>
									<option {if $brandSize['end_height']== 179} selected {/if} value="179">179</option>
									<option {if $brandSize['end_height']== 180} selected {/if} value="180">180</option>
									<option {if $brandSize['end_height']== 181} selected {/if} value="181">181</option>
									<option {if $brandSize['end_height']== 182} selected {/if} value="182">182</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li>
			     		 	<li>
			     		 		<label>体重：</label>
			     		 		<select name="start_weight[]">
			     		 			<option {if $brandSize['start_weight']== 0} selected {/if} value="0">请选择</option>
									<option {if $brandSize['start_weight']== 34} selected {/if} value="34">34</option>
									<option {if $brandSize['start_weight']== 35} selected {/if} value="35">35</option>
									<option {if $brandSize['start_weight']== 36} selected {/if} value="36">36</option>
									<option {if $brandSize['start_weight']== 37} selected {/if} value="37">37</option>
									<option {if $brandSize['start_weight']== 38} selected {/if} value="38">38</option>
									<option {if $brandSize['start_weight']== 39} selected {/if} value="39">39</option>
									<option {if $brandSize['start_weight']== 40} selected {/if} value="40">40</option>
									<option {if $brandSize['start_weight']== 41} selected {/if} value="41">41</option>
									<option {if $brandSize['start_weight']== 42} selected {/if} value="42">42</option>
									<option {if $brandSize['start_weight']== 43} selected {/if} value="43">43</option>
									<option {if $brandSize['start_weight']== 44} selected {/if} value="44">44</option>
									<option {if $brandSize['start_weight']== 45} selected {/if} value="45">45</option>
									<option {if $brandSize['start_weight']== 46} selected {/if} value="46">46</option>
									<option {if $brandSize['start_weight']== 47} selected {/if} value="47">47</option>
									<option {if $brandSize['start_weight']== 48} selected {/if} value="48">48</option>
									<option {if $brandSize['start_weight']== 49} selected {/if} value="49">49</option>
									<option {if $brandSize['start_weight']== 50} selected {/if} value="50">50</option>
									<option {if $brandSize['start_weight']== 51} selected {/if} value="51">51</option>
									<option {if $brandSize['start_weight']== 52} selected {/if} value="52">52</option>
									<option {if $brandSize['start_weight']== 53} selected {/if} value="53">53</option>
									<option {if $brandSize['start_weight']== 54} selected {/if} value="54">54</option>
									<option {if $brandSize['start_weight']== 55} selected {/if} value="55">55</option>
									<option {if $brandSize['start_weight']== 56} selected {/if} value="56">56</option>
									<option {if $brandSize['start_weight']== 57} selected {/if} value="57">57</option>
									<option {if $brandSize['start_weight']== 58} selected {/if} value="58">58</option>
									<option {if $brandSize['start_weight']== 59} selected {/if} value="59">59</option>
									<option {if $brandSize['start_weight']== 60} selected {/if} value="60">60</option>
									<option {if $brandSize['start_weight']== 61} selected {/if} value="61">61</option>
									<option {if $brandSize['start_weight']== 62} selected {/if} value="62">62</option>
									<option {if $brandSize['start_weight']== 63} selected {/if} value="63">63</option>
									<option {if $brandSize['start_weight']== 64} selected {/if} value="64">64</option>
									<option {if $brandSize['start_weight']== 65} selected {/if} value="65">65</option>
									<option {if $brandSize['start_weight']== 66} selected {/if} value="66">66</option>
									<option {if $brandSize['start_weight']== 67} selected {/if} value="67">67</option>
									<option {if $brandSize['start_weight']== 68} selected {/if} value="68">68</option>
									<option {if $brandSize['start_weight']== 69} selected {/if} value="69">69</option>
									<option {if $brandSize['start_weight']== 70} selected {/if} value="70">70</option>
									<option {if $brandSize['start_weight']== 71} selected {/if} value="71">71</option>
									<option {if $brandSize['start_weight']== 72} selected {/if} value="72">72</option>
									<option {if $brandSize['start_weight']== 73} selected {/if} value="73">73</option>
									<option {if $brandSize['start_weight']== 74} selected {/if} value="74">74</option>
									<option {if $brandSize['start_weight']== 75} selected {/if} value="75">75</option>
									<option {if $brandSize['start_weight']== 76} selected {/if} value="76">76</option>
									<option {if $brandSize['start_weight']== 77} selected {/if} value="77">77</option>
									<option {if $brandSize['start_weight']== 78} selected {/if} value="78">78</option>
									<option {if $brandSize['start_weight']== 79} selected {/if} value="79">79</option>
									<option {if $brandSize['start_weight']== 80} selected {/if} value="80">80</option>
									<option {if $brandSize['start_weight']== 81} selected {/if} value="81">81</option>
									<option {if $brandSize['start_weight']== 82} selected {/if} value="82">82</option>
									<option {if $brandSize['start_weight']== 83} selected {/if} value="83">83</option>
									<option {if $brandSize['start_weight']== 84} selected {/if} value="84">84</option>
									<option {if $brandSize['start_weight']== 85} selected {/if} value="85">85</option>
									<option {if $brandSize['start_weight']== 86} selected {/if} value="86">86</option>
									<option {if $brandSize['start_weight']== 87} selected {/if} value="87">87</option>
									<option {if $brandSize['start_weight']== 88} selected {/if} value="88">88</option>
			     		 		</select>
			     		 		<em> &nbspkg </em>
			     		 		<span>～</span>
			     		 		<select name="end_weight[]">
			     		 			<option {if $brandSize['end_weight']== 0} selected {/if} value="0">请选择</option>
									<option {if $brandSize['end_weight']== 34} selected {/if} value="34">34</option>
									<option {if $brandSize['end_weight']== 35} selected {/if} value="35">35</option>
									<option {if $brandSize['end_weight']== 36} selected {/if} value="36">36</option>
									<option {if $brandSize['end_weight']== 37} selected {/if} value="37">37</option>
									<option {if $brandSize['end_weight']== 38} selected {/if} value="38">38</option>
									<option {if $brandSize['end_weight']== 39} selected {/if} value="39">39</option>
									<option {if $brandSize['end_weight']== 40} selected {/if} value="40">40</option>
									<option {if $brandSize['end_weight']== 41} selected {/if} value="41">41</option>
									<option {if $brandSize['end_weight']== 42} selected {/if} value="42">42</option>
									<option {if $brandSize['end_weight']== 43} selected {/if} value="43">43</option>
									<option {if $brandSize['end_weight']== 44} selected {/if} value="44">44</option>
									<option {if $brandSize['end_weight']== 45} selected {/if} value="45">45</option>
									<option {if $brandSize['end_weight']== 46} selected {/if} value="46">46</option>
									<option {if $brandSize['end_weight']== 47} selected {/if} value="47">47</option>
									<option {if $brandSize['end_weight']== 48} selected {/if} value="48">48</option>
									<option {if $brandSize['end_weight']== 49} selected {/if} value="49">49</option>
									<option {if $brandSize['end_weight']== 50} selected {/if} value="50">50</option>
									<option {if $brandSize['end_weight']== 51} selected {/if} value="51">51</option>
									<option {if $brandSize['end_weight']== 52} selected {/if} value="52">52</option>
									<option {if $brandSize['end_weight']== 53} selected {/if} value="53">53</option>
									<option {if $brandSize['end_weight']== 54} selected {/if} value="54">54</option>
									<option {if $brandSize['end_weight']== 55} selected {/if} value="55">55</option>
									<option {if $brandSize['end_weight']== 56} selected {/if} value="56">56</option>
									<option {if $brandSize['end_weight']== 57} selected {/if} value="57">57</option>
									<option {if $brandSize['end_weight']== 58} selected {/if} value="58">58</option>
									<option {if $brandSize['end_weight']== 59} selected {/if} value="59">59</option>
									<option {if $brandSize['end_weight']== 60} selected {/if} value="60">60</option>
									<option {if $brandSize['end_weight']== 61} selected {/if} value="61">61</option>
									<option {if $brandSize['end_weight']== 62} selected {/if} value="62">62</option>
									<option {if $brandSize['end_weight']== 63} selected {/if} value="63">63</option>
									<option {if $brandSize['end_weight']== 64} selected {/if} value="64">64</option>
									<option {if $brandSize['end_weight']== 65} selected {/if} value="65">65</option>
									<option {if $brandSize['end_weight']== 66} selected {/if} value="66">66</option>
									<option {if $brandSize['end_weight']== 67} selected {/if} value="67">67</option>
									<option {if $brandSize['end_weight']== 68} selected {/if} value="68">68</option>
									<option {if $brandSize['end_weight']== 69} selected {/if} value="69">69</option>
									<option {if $brandSize['end_weight']== 70} selected {/if} value="70">70</option>
									<option {if $brandSize['end_weight']== 71} selected {/if} value="71">71</option>
									<option {if $brandSize['end_weight']== 72} selected {/if} value="72">72</option>
									<option {if $brandSize['end_weight']== 73} selected {/if} value="73">73</option>
									<option {if $brandSize['end_weight']== 74} selected {/if} value="74">74</option>
									<option {if $brandSize['end_weight']== 75} selected {/if} value="75">75</option>
									<option {if $brandSize['end_weight']== 76} selected {/if} value="76">76</option>
									<option {if $brandSize['end_weight']== 77} selected {/if} value="77">77</option>
									<option {if $brandSize['end_weight']== 78} selected {/if} value="78">78</option>
									<option {if $brandSize['end_weight']== 79} selected {/if} value="79">79</option>
									<option {if $brandSize['end_weight']== 80} selected {/if} value="80">80</option>
									<option {if $brandSize['end_weight']== 81} selected {/if} value="81">81</option>
									<option {if $brandSize['end_weight']== 82} selected {/if} value="82">82</option>
									<option {if $brandSize['end_weight']== 83} selected {/if} value="83">83</option>
									<option {if $brandSize['end_weight']== 84} selected {/if} value="84">84</option>
									<option {if $brandSize['end_weight']== 85} selected {/if} value="85">85</option>
									<option {if $brandSize['end_weight']== 86} selected {/if} value="86">86</option>
									<option {if $brandSize['end_weight']== 87} selected {/if} value="87">87</option>
									<option {if $brandSize['end_weight']== 88} selected {/if} value="88">88</option>
			     		 		</select>
			     		 		<em> kg </em>
			     		 	</li>
			     		 	<li>
			     		 		<label>臀围：</label>
			     		 		<select name="start_hipline[]">
			     		 			  <option {if $brandSize['start_hipline']== 0} selected {/if} value="0">请选择</option>
			     		 			  <option {if $brandSize['start_hipline']== 74} selected {/if} value="74">74</option>
						              <option {if $brandSize['start_hipline']== 75} selected {/if} value="75">75</option>
						              <option {if $brandSize['start_hipline']== 76} selected {/if} value="76">76</option>
						              <option {if $brandSize['start_hipline']== 77} selected {/if} value="77">77</option>
						              <option {if $brandSize['start_hipline']== 78} selected {/if} value="78">78</option>
						              <option {if $brandSize['start_hipline']== 79} selected {/if} value="79">79</option>
						              <option {if $brandSize['start_hipline']== 80} selected {/if} value="80">80</option>
						              <option {if $brandSize['start_hipline']== 81} selected {/if} value="81">81</option>
						              <option {if $brandSize['start_hipline']== 82} selected {/if} value="82">82</option>
						              <option {if $brandSize['start_hipline']== 83} selected {/if} value="83">83</option>
						              <option {if $brandSize['start_hipline']== 84} selected {/if} value="84">84</option>
						              <option {if $brandSize['start_hipline']== 85} selected {/if} value="85">85</option>
						              <option {if $brandSize['start_hipline']== 86} selected {/if} value="86">86</option>
						              <option {if $brandSize['start_hipline']== 87} selected {/if} value="87">87</option>
						              <option {if $brandSize['start_hipline']== 88} selected {/if} value="88">88</option>
						              <option {if $brandSize['start_hipline']== 89} selected {/if} value="89">89</option>
						              <option {if $brandSize['start_hipline']== 90} selected {/if} value="90">90</option>
						              <option {if $brandSize['start_hipline']== 91} selected {/if} value="91">91</option>
						              <option {if $brandSize['start_hipline']== 92} selected {/if} value="92">92</option>
						              <option {if $brandSize['start_hipline']== 93} selected {/if} value="93">93</option>
						              <option {if $brandSize['start_hipline']== 94} selected {/if} value="94">94</option>
						              <option {if $brandSize['start_hipline']== 95} selected {/if} value="95">95</option>
						              <option {if $brandSize['start_hipline']== 96} selected {/if} value="96">96</option>
						              <option {if $brandSize['start_hipline']== 97} selected {/if} value="97">97</option>
						              <option {if $brandSize['start_hipline']== 98} selected {/if} value="98">98</option>
						              <option {if $brandSize['start_hipline']== 99} selected {/if} value="99">99</option>
						              <option {if $brandSize['start_hipline']== 100} selected {/if} value="100">100</option>
						              <option {if $brandSize['start_hipline']== 101} selected {/if} value="101">101</option>
						              <option {if $brandSize['start_hipline']== 102} selected {/if} value="102">102</option>
						              <option {if $brandSize['start_hipline']== 103} selected {/if} value="103">103</option>
						              <option {if $brandSize['start_hipline']== 104} selected {/if} value="104">104</option>
						              <option {if $brandSize['start_hipline']== 105} selected {/if} value="105">105</option>
						              <option {if $brandSize['start_hipline']== 106} selected {/if} value="106">106</option>
						              <option {if $brandSize['start_hipline']== 107} selected {/if} value="107">107</option>
						              <option {if $brandSize['start_hipline']== 108} selected {/if} value="108">108</option>
						              <option {if $brandSize['start_hipline']== 109} selected {/if} value="109">109</option>
						              <option {if $brandSize['start_hipline']== 110} selected {/if} value="110">110</option>
						              <option {if $brandSize['start_hipline']== 111} selected {/if} value="111">111</option>
						              <option {if $brandSize['start_hipline']== 112} selected {/if} value="112">112</option>
						              <option {if $brandSize['start_hipline']== 113} selected {/if} value="113">113</option>
						              <option {if $brandSize['start_hipline']== 114} selected {/if} value="114">114</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_hipline[]">
			     		 			  <option {if $brandSize['end_hipline']== 0} selected {/if} value="0">请选择</option>
			     		 			  <option {if $brandSize['end_hipline']== 74} selected {/if} value="74">74</option>
						              <option {if $brandSize['end_hipline']== 75} selected {/if} value="75">75</option>
						              <option {if $brandSize['end_hipline']== 76} selected {/if} value="76">76</option>
						              <option {if $brandSize['end_hipline']== 77} selected {/if} value="77">77</option>
						              <option {if $brandSize['end_hipline']== 78} selected {/if} value="78">78</option>
						              <option {if $brandSize['end_hipline']== 79} selected {/if} value="79">79</option>
						              <option {if $brandSize['end_hipline']== 80} selected {/if} value="80">80</option>
						              <option {if $brandSize['end_hipline']== 81} selected {/if} value="81">81</option>
						              <option {if $brandSize['end_hipline']== 82} selected {/if} value="82">82</option>
						              <option {if $brandSize['end_hipline']== 83} selected {/if} value="83">83</option>
						              <option {if $brandSize['end_hipline']== 84} selected {/if} value="84">84</option>
						              <option {if $brandSize['end_hipline']== 85} selected {/if} value="85">85</option>
						              <option {if $brandSize['end_hipline']== 86} selected {/if} value="86">86</option>
						              <option {if $brandSize['end_hipline']== 87} selected {/if} value="87">87</option>
						              <option {if $brandSize['end_hipline']== 88} selected {/if} value="88">88</option>
						              <option {if $brandSize['end_hipline']== 89} selected {/if} value="89">89</option>
						              <option {if $brandSize['end_hipline']== 90} selected {/if} value="90">90</option>
						              <option {if $brandSize['end_hipline']== 91} selected {/if} value="91">91</option>
						              <option {if $brandSize['end_hipline']== 92} selected {/if} value="92">92</option>
						              <option {if $brandSize['end_hipline']== 93} selected {/if} value="93">93</option>
						              <option {if $brandSize['end_hipline']== 94} selected {/if} value="94">94</option>
						              <option {if $brandSize['end_hipline']== 95} selected {/if} value="95">95</option>
						              <option {if $brandSize['end_hipline']== 96} selected {/if} value="96">96</option>
						              <option {if $brandSize['end_hipline']== 97} selected {/if} value="97">97</option>
						              <option {if $brandSize['end_hipline']== 98} selected {/if} value="98">98</option>
						              <option {if $brandSize['end_hipline']== 99} selected {/if} value="99">99</option>
						              <option {if $brandSize['end_hipline']== 100} selected {/if} value="100">100</option>
						              <option {if $brandSize['end_hipline']== 101} selected {/if} value="101">101</option>
						              <option {if $brandSize['end_hipline']== 102} selected {/if} value="102">102</option>
						              <option {if $brandSize['end_hipline']== 103} selected {/if} value="103">103</option>
						              <option {if $brandSize['end_hipline']== 104} selected {/if} value="104">104</option>
						              <option {if $brandSize['end_hipline']== 105} selected {/if} value="105">105</option>
						              <option {if $brandSize['end_hipline']== 106} selected {/if} value="106">106</option>
						              <option {if $brandSize['end_hipline']== 107} selected {/if} value="107">107</option>
						              <option {if $brandSize['end_hipline']== 108} selected {/if} value="108">108</option>
						              <option {if $brandSize['end_hipline']== 109} selected {/if} value="109">109</option>
						              <option {if $brandSize['end_hipline']== 110} selected {/if} value="110">110</option>
						              <option {if $brandSize['end_hipline']== 111} selected {/if} value="111">111</option>
						              <option {if $brandSize['end_hipline']== 112} selected {/if} value="112">112</option>
						              <option {if $brandSize['end_hipline']== 113} selected {/if} value="113">113</option>
						              <option {if $brandSize['end_hipline']== 114} selected {/if} value="114">114</option>
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li> 
			     	     </ul>
			     	     {if $k== 0}
			     		<span class="button  trousers_plus" style="margin-top:0;">
				     		 	<img src=" /assets/images/plus.png">
				     	</span> 
				     	{else}
				     	<span class="button trousers_remove">
			     		 	<img src=" /assets/images/minus.png">
			     		 </span> 
			     		 {/if}
		     		</div>
		     		{/foreach}
		     		{else}
		     		
		     		<div class="size_form_list">
		     			 <ul class="size_form_list1">
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
			     		 		<label>下装尺码：</label>
			     		 		<select name="size[]">
			     		 			<option value="0">请选择</option>
			     		 			<option value="1">25</option>
			     		 			<option value="2">26</option>
			     		 			<option value="3">27</option>
			     		 			<option value="4">28</option>
			     		 			<option value="5">29</option>
			     		 			<option value="6">30</option>
			     		 			<option value="7">31</option>
			     		 			<option value="8">32</option>
			     		 		</select>
			     		 	</li>
			     		 	<li>
			     		 		<label>大腿围:</label>
			     		 		<select name="start_thigh_girth[]">
			     		 			<option value="0">请选择</option>
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
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_thigh_girth[]">
			     		 			<option value="0">请选择</option>
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
			     		 		<label>臀围：</label>
			     		 		<select name="start_hipline[]">
			     		 			  <option value="0">请选择</option>
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
			     		 		</select>
			     		 		<em> cm </em>
			     		 		<span>～</span>
			     		 		<select name="end_hipline[]">
			     		 			  <option value="0">请选择</option>
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
			     		 		</select>
			     		 		<em> cm </em>
			     		 	</li> 
			     	     </ul>
			     		<span class="button  trousers_plus" style="margin-top:0;">
				     		 	<img src=" /assets/images/plus.png">
				     	</span> 
		     		</div>
		     		{/if}
		     	</div>
			    <div class="sub">
		    		<input type="submit" value="保存">
		    	</div>	
			 </form>
		</div>
		</div>
		{literal}
<script type="text/javascript">	
function check() {
		return true;
}

</script> 
{/literal}
</body>
</html>