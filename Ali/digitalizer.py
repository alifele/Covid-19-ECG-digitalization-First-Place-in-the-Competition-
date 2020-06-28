#!/usr/bin/env python
# coding: utf-8

# In[1]:


import numpy as np
import matplotlib.pyplot as plt
import cv2 as cv


# In[2]:


image_name = 'III.jpg'
image = cv.imread(image_name, flags=cv.IMREAD_GRAYSCALE)
image[image<40] = 0
image[image>200] = 255


# In[3]:


plt.figure(figsize=(20,15))
plt.imshow(image)


# In[ ]:





# In[ ]:





# In[4]:


data = []
h = image.shape[0]
for i, col in enumerate(image.T):
    data_point = np.mean([h-np.argmax(col==255), np.argmax(col[::-1]==255)])
    data.append((i,data_point))


# In[5]:


data = np.array(data)


# In[13]:


plt.figure(figsize=(15,9))

plt.plot(data[:,0], data[:,1], lw=5)
#plt.plot(data[:,0], data[:,1],'8')
plt.title('Digitalized output', size=15)
plt.xlabel('t', size=15)
plt.ylabel('voltage\n(non normalized)', size=15)
plt.savefig('output.jpg')
#plt.imshow(image)


# In[ ]:





# In[ ]:





# In[ ]:




