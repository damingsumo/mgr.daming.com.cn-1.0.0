{include file="common/head.tpl" pageTitle='用户详情'}	
{include file="common/menu.tpl" type='user'} 
<div class="detial">
	 		
				<ul class="top">
					<li><a href="">用户详情</a></li>
				</ul>
				<div class="new_list">
					<ul>
						<li>
							基本信息
						</li>
						<li>
							<span>身高：{$user.figure['height']}cm</span>
							<span>体重：{$user.figure['weight']}kg</span>
							<span>年龄：{$user.figure['age']}</span>
						</li>
						<li>
							胸罩尺码
						</li>
						<li>
							<span>下胸围：{$user.figure['chest_circumference']}</span>
							<span>罩杯：{$user.figure['cup_size']}</span>
						</li>
						<li>
							身材特征
						</li>
				    </ul>
				</div>
				<div class="feature">

					<ul>
						<div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>腰型：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em {if $user.figure['waist'] == 1}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>直筒</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['waist']  == 2}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['waist']  == 3}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>有曲线</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['waist']  == 4}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em {if $user.figure['waist']  == 5}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>曲线明显</span>
					     		</em>
				     		</div>
				     		
				     		
				     		

				     	</li>
				     	</div>
				     	<div class="aaa">
				     	<em class="line"></em> 
						<li>
                            <span>肚腩：</span>
                            <div class="scirle_style">
					     		<em class="scirle">
					     			<em {if $user.figure['belly']  == 1}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>没有</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['belly']  == 2}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['belly']  == 3}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>小肚腩</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['belly']  == 4}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em {if $user.figure['belly']  == 5}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>大肚腩</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     	</div>
				     <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>臀形：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em {if $user.figure['stern_type']  == 1}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>下塌</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['stern_type']  == 2}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['stern_type']  == 3}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['stern_type']  == 4}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em {if $user.figure['stern_type']  == 5}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>上翘</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					 <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>胯型：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em {if $user.figure['hip_type']  == 1}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>直筒</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['hip_type']  == 2}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['hip_type']  == 3}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>有曲线</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['hip_type']  == 4}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em {if $user.figure['hip_type']  == 5}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>曲线明显</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
				      <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>肩膀：</span>
                            <div class="scirle_style">
					     		<em class="scirle">
					     			<em {if $user.figure['shoulder']  == 1}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>窄</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['shoulder']  == 2}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['shoulder']  == 3}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['shoulder']  == 4}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em {if $user.figure['shoulder']  == 5}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>宽</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					   <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>臂长：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em {if $user.figure['arm']  == 1}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>短</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['arm']  == 2}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['arm']  == 3}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['arm']  == 4}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em {if $user.figure['arm']  == 5}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>长</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					  <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>臂围：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em {if $user.figure['arm_circumference']  == 1}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>细</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['arm_circumference']  == 2}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['arm_circumference']  == 3}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['arm_circumference']  == 4}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em {if $user.figure['arm_circumference']  == 5}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>粗</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
				    
				     <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>胯部：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em {if $user.figure['hip']  == 1}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>窄</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['hip']  == 2}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['hip']  == 3}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['hip']  == 4}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em {if $user.figure['hip']  == 5}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>宽</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					  <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>大腿：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em {if $user.figure['thigh']  == 1}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>细</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['thigh']  == 2}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['thigh']  == 3}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['thigh']  == 4}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em {if $user.figure['thigh']  == 5}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>粗</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					  <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>小腿：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em {if $user.figure['leg']  == 1}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>细</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['leg']  == 2}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['leg']  == 3}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['leg']  == 4}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em {if $user.figure['leg']  == 5}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>粗</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					 <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>上下身粗：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em {if $user.figure['body_thick']  == 1}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>上身粗</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['body_thick']  == 2}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['body_thick']  == 3}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>一般比例</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['body_thick']  == 4}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em {if $user.figure['body_thick']  == 5}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>下身粗</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					  <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>上下身长：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em {if $user.figure['body_length']  == 1}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>上身长</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['body_length']  == 2}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['body_length']  == 3}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>一般比例</span>
					     		</em> 
					     		<em class="scirle">
					     			<em {if $user.figure['body_length']  == 4}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em {if $user.figure['body_length']  == 5}class="scirle_color color1"{else}class="scirle_color"{/if}></em>
					     			<span>下身长</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					    
						<li>
                            <span>注重部分：胯部、臀部、小腿。</span>
                             
				     	 
				     		
				     	</li>
				    
					</ul>
				</div>
			      <div class="footer ">
					<span> </span>
					<span> </span>
					<span> </span>
					<span> </span>
				</div>
	  <div class="sub sub3">
				<button onclick="window.location.href='/shoes/shoesList'">返回</button>
	       </div>
		     </div>
	  </div>
</body>
</html>